<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admindata;
use App\Models\adminlog;
use App\Models\userdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class admindata_controller extends Controller
{
    public function index()
    {
        return view('adminpage.adminlogin');
    }


    public function store(Request $request)

    {
        // //CREATE CUSTOM ID
        $prefix = "A";
        $count = admindata::count() + 1;

        // Create a formatted ID with a prefix and padded count
        $formattedCount = str_pad($count, 3, '0', STR_PAD_LEFT);
        $customId = $prefix . $formattedCount;

        $validatedData = $request->validate(
            [
                'name' => 'required|max:100',
                'password' => 'required',
                'address' => 'required',
                'email' => 'required|email|unique:admindata,email',
                'phone' => 'required',
                'role' => 'required',
                'note' => 'required',
            ],
            [
                'email.unique' => 'Email telah digunakan! Silakan gunakan email yang lain.'
            ]
        );

        $validatedData['slug'] = $request->name . '%' . $customId;
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
        $lastRoleFromDatabase = admindata::orderBy('id', 'desc')->value('role');
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
            return redirect()->intended('/adminpage')->with('success', "Berhasil Login!");
        }
        if (Auth::guard('user')->attempt($infologin)) {
            $request->session()->regenerate();
            return redirect('/userpage')->with('success', "Welcome " . auth()->user()->name . '!');
        }




        return redirect()->route('login')->with("gagal", 'Email/Password salah');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/nyataadmin');
    }

    public function profileadminupdate(Request $request)
    {
        $data = admindata::find(auth()->user()->id);
        // dd($data);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->role = $request->role;
        $data->note = $request->note;

        // dd($data);
        // $data->image = $request->image;

        if ($request->image) {
            $image = $request->file('image');
            $imagename = $data->name . '_picture_' . time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('admin-image', $imagename, 'public');
            // Storage::disk('public')->put($image, 'user-image');
            $data['image'] = $path;
            // Delete current images 
            if ($request->oldimage) {
                $filename =   $request->oldimage;
                Storage::disk('public')->delete($filename);
            }
        }

        $data->save();
        return redirect('profile')->with("success", "Data" . ' ' . auth()->user()->name . ' ' . 'updated');
    }

    public function aa(Request $request, $id)
    {
        // $request->validate([
        //     'current_password' => ['required'],
        //     'password' => ['required','min:6','confirmed'],
        //     'password_confirmation' => ['required'],
        // ]);
        // if (Hash::check($request->current_password,auth()->user()->password)){
        // };
        // return back()->with('message','Your password has been updated');


        // throw ValidationException::withMessages([
        //     'current_password'=>'Your Current Password Doesnt Match with our record'
        // ]);
        $request->validate([
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
        ]);
        $data = admindata::find($id);
        $data->password = $request->password;
        $data['password'] = Hash::make($data['password']);
        $data->save();
        if ($data->save()) {
            return redirect('profile')->with('success', "Password Updated");
        } else {
            return redirect()->back()->withErrors(['error' => 'Failed to save data']);
        }
    }

    public function changePassword(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'password' => 'required|min:6|confirmed',
            ],
            [
                'password.required' => 'The password field required',
                'password.min' => 'The password must be at least :min characters.',
                'password.confirmed' => 'The password confirmation does not match.',
            ]
        );

        $data = admindata::find($id);
        $data->password = $request->password;
        // $data['password'] = Hash::make($data['password']);
        $data->password = bcrypt($validatedData['password']);
        $data->save();
        return redirect('profile')->with('success', 'Password' . ' ' . auth()->user()->name . ' ' . 'updated');
        //  response()->json(['message' => 'Password' . ' '. auth()->user()->name .' '. 'Updated'], 200);
    }

    public function deleteadminphoto()
    {
        $data = admindata::findorFail(auth()->user()->id);
        $data->image = null;
        $data->save();
        // dd($data);
        $filename =   auth()->user()->image;
        Storage::disk('public')->delete($filename);
        return back()->with('Success', 'Photo Deleted');
    }
}
