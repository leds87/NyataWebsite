<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\userdata;
use Illuminate\Http\Request;

class userdata_controller extends Controller
{
    public function index()
    {
        $data=userdata::count();
        return view('adminpage.adminpage', ['data'=>$data]);
    }

public function store(Request $request)
{
    $data = $request->validate(
        [
            'name' => 'required|max:100',
            'email' => 'required',
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


}
