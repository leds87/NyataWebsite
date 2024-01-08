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
                'email' => 'required',
                'address'=> 'required',
                'phone'=> 'required',
                'tier'=> 'required',
                'note'=> 'required',
                'since'=> 'required',
                'status'=> 'required',
            ]
            );
            admindata::create($data);

            dd($data);
            return redirect('/adminpage')->with("success","Your Data Has Been Input!");
    }
    
    public function showdata(){
        $data=admindata::all();
        return view('adminpage.admindata', ['data'=>$data]);
    }

}
