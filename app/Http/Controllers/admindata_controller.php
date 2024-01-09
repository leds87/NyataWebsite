<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admindata;
use Illuminate\Http\Request;

class admindata_controller extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|max:100',
                'address'=> 'required',
                'email' => 'required',
                'phone'=> 'required',
                'role'=> 'required',
                'note'=> 'required',
            ]
            );
            admindata::create($data);
            return view('adminpage.adminshow')->with("success","Your Data Has Been Input!");
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

}
