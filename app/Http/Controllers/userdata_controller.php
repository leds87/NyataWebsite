<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\userdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $data['log'] = 'user';
        $data['password'] = Hash::make($data['password']);
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
        return redirect('usershow')->with("success","Data Deleted!");
    }

    public function update(Request $request, $id)
    {
        $data = userdata::find($id);

        $data->name = $request->name;
        $data->address = $request->address;
        $data->email = $request->email;
        // $data->password = $request->password;
        $data->phone = $request->phone;
        $data->tier = $request->tier;
        $data->note = $request->note;
        $data->since = $request->since;
        $data->status = $request->status;
    
        // $data['password'] = Hash::make($data['password']);
        $data->save();
        return redirect('profile')->with("success","Data Updated");
        


    }
    public function edit($id)
    {
        // dd($id);
        $data = userdata::find($id);
        return view ('adminpage.useredit',[
            'data'=>$data,
        ]);
    }
    
}
