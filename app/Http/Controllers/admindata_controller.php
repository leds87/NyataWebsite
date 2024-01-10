<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admindata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class admindata_controller extends Controller
{
    public function index(){
        return view('adminpage.adminlogin');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:100',
                'password'=> 'required',
                'address'=> 'required',
                'email' => 'required',
                'phone'=> 'required',
                'role'=> 'required',
                'note'=> 'required',
            ]
            );
            $validatedData['password'] = Hash::make($validatedData['password']);
            admindata::create($validatedData);
            return redirect()->route('login')->with("success","Your Data Has Been Input!");
    }
    
    public function showdata(){
        $data=admindata::all();
        return view('adminpage.adminshow', ['data'=>$data]);
    }
    public function destroy($id)
    {
        $data = admindata::find($id);
        $data->delete();
        return view('adminpage.adminshow')->with("success","Data Deleted!");
    }

    public function update(Request $request, $id)
    {
        $data = admindata::find($id);

        $data->name = $request->name;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->tier = $request->tier;
        $data->note = $request->note;
        $data->since = $request->since;
        $data->status = $request->status;
    

        $data->save();
        return redirect('adminpage')->with("success","Data Updated");
        


    }
    public function edit($id)
    {
        // dd($id);
        $data = admindata::find($id);
        return view ('adminpage.useredit',[
            'data'=>$data,
        ]);
    }

    public function login(Request $request){
      
            $request->validate([
                'email'=>'required',
                'password'=>'required',
            ], [
                'email.required' => 'Email wajib diisi!',
                'password.required' => 'Password wajib diisi',
            ]);
            $infologin = [
                'email'=>$request->email,
                'password'=>$request->password,
            ];
             if (Auth::attempt($infologin)) {
                return redirect()->intended('/adminpage')->with("sukses","Berhasil Login!");
            }
            else{
                return redirect()->route('login')->with("gagal", 'Username/Password salah');
            }
        }

        
        public function logout(Request $request) 
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/nyataadmin');
        }

}