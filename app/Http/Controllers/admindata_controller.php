<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admindata;
use App\Models\adminlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class admindata_controller extends Controller
{
    public function index()
    {
        return view('adminpage.adminlogin');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:100',
                'password' => 'required',
                'address' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'role' => 'required',
                'note' => 'required',
            ]
        );
        $validatedData['log'] = 'admin';
        $validatedData['password'] = Hash::make($validatedData['password']);
        admindata::create($validatedData);

        // $auth = Auth::user();
        // $authid = $auth->name;
        // dd($authid);


        //     //BECAUSE MODEL IS AUTHENTICABLE, SO NOW STORE LOG DATA STILL FROM CONTROLLER
        //     $currentDate = now()->format('j F Y');
        //     adminlog::create([
        //         'date' => $currentDate,
        //         'typelog' => 'Admin',
        //         'personid' => Auth::user()->id ? : null,
        //         'description' => (Auth::user() ? Auth::user()->name.' '.'created a record of '.$request->name : 'DB Seeder created a record'),
        //     ]);


            // $currentDate = now()->format('j F Y');
            // $childrenname = $data->name;
            //     userlog::create([
            //         'date' => $currentDate,
            //         'typelog' => 'Choose Child',
            //         'personid' => Auth::id(),
            //         'description' => (Auth::user()->name.' '.'unsupport children : '.$data->name),
            //     ]);

        return redirect()->route('adminshow')->with("success", "Your Data Has Been Input!");
    }

    public function showdata()
    {
        $data = admindata::all();
        return view('adminpage.adminshow', ['data' => $data]);
    }

    public function showprofile()
    {
        $datanews = admindata::all();
        return view('adminpage.profile', ['datanews' => $datanews]);
    }
    public function destroy($id)
    {
        $data = admindata::find($id);
        $data->delete();
        return redirect()->route('adminshow')->with("success", "Data Deleted!");
    }

    public function update(Request $request, $id)
    {
        $data = admindata::find($id);

        $data->name = $request->name;
        // $data->password = $request->password;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->role = $request->role;
        $data->note = $request->note;
        $data->save();
        return redirect('adminpage')->with("success", "Data Updated");
    }
    public function edit($id)
    {
        // dd($id);
        $data = admindata::find($id);
        $lastRoleFromDatabase = admindata::orderBy('id','desc')->value('role');
        return view('adminpage.adminedit', [
            'data' => $data,
            'lastRoleFromDatabase' => $lastRoleFromDatabase
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi!',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($infologin)) {
            $request->session()->regenerate();
            return redirect()->intended('/adminpage')->with("sukses", "Berhasil Login!");
        } 
        if (Auth::guard('user')->attempt($infologin)) 
        {
            $request->session()->regenerate();
            return redirect()->intended('/userpage')->with("sukses", "Berhasil Login!");
        }
        return redirect()->route('login')->with("gagal", 'Username/Password salah');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/nyataadmin');
    }
}
