<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\contactadmin as contactadminmail;
use App\Models\contactadmin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

            $mailData = [
                'name' => $request->name,
                'email' => $request->email,
                'phone'=> $request->phone,
                'subject'=> $request->subject,
                'description'=> $request->description];
                 Mail::to('raymondar80@gmail.com')->send(new contactadminmail($mailData));

            return redirect('/userpage')->with("success","Your Data Has Been Input!");
    }
}
