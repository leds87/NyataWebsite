<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contactadmin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contactadmin_controller extends Controller
{
    public function index(){
        return view('adminpage.contactadmin');
    }

    public function store(Request $request){

        $data2 = Auth::id();
        $date = Carbon::now()->format('Y-m-d');
        $data = $request->validate(
            [
                'name'=> 'required',
                'email' => 'required',
                'phone'=> 'required',
                'subject'=> 'required',
                'description'=> 'required',
            ]
            );
            contactadmin::create([
                'date' => $date,
                'userid' => $data2,
                'name'=>$data['name'],
                'email' =>  $data['email'],
                'phone'=>  $data['phone'],
                'subject'=>  $data['subject'],
                'description'=>  $data['description']
                
                ]
            );
            return redirect('/userpage')->with("success","Your Data Has Been Input!");
    }
}
