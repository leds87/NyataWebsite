<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contactadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contactadmin_controller extends Controller
{
    public function index(){
        return view('adminpage.contactadmin');
    }

    public function store(Request $request){

        $data2 = Auth::id();
        $data = $request->validate(
            [
                'name'=> 'required',
                'email' => 'required',
                'phone'=> 'required',
                'description'=> 'required',
            ]
            );
            contactadmin::create([
                'userid' => $data2,
                'name'=>$data['name'],
                'email' =>  $data['email'],
                'phone'=>  $data['phone'],
                'description'=>  $data['description']
                
                ]
            );
            return redirect('/userpage')->with("success","Your Data Has Been Input!");
    }
}
