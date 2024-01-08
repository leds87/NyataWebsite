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

public function getUsersCount()
{
    $activeusers = userdata::where('status', 'active')->count();
    $inactiveusers = userdata::where('status', 'inactive')->count();
    $postponeusers = userdata::where('status', 'postpone')->count();

    return view('adminpage.adminpage', [
        'usercount' => $activeusers + $inactiveusers + $postponeusers,
        'activeusers' => $activeusers,
        'inactiveusers' => $inactiveusers,
        'postponeusers' => $postponeusers,
    ]);
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
    return view('adminpage.user', ['data'=>$data]);
}


}
