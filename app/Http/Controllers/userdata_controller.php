<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\userdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userdata_controller extends Controller
{
    public function index()
    {
        return view('adminpage.adminlogin');
    }

public function store(Request $request)
{
    $data = $request->validate(
        [
            'name' => 'required|max:100',
            'email' => 'required',
            'password' => 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'tier'=> 'required',
            'note'=> 'required',
            'since'=> 'required',
            'status'=> 'required',
        ]
        );
        userdata::create($data);
        return redirect('/adminpage')->with("success","Your Data Has Been Input!");
}

public function showdata(){
    $data=userdata::all();
    return view('adminpage.usershow', ['data'=>$data]);
}

public function destroy($id)
    {
        $data = userdata::find($id);
        $data->delete();
        return view('adminpage.usershow')->with("success","Data Deleted!");
    }

    public function update(Request $request, $id)
    {
        $data = userdata::find($id);

        $data->name = $request->name;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->password = $request->password;
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
        $data = userdata::find($id);
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