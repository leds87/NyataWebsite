<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use Illuminate\Http\Request;

class childrennotsupported_controller extends Controller
{
    public function index(){
        $data=childrendata::all();
        return view('adminpage.childrennotsupported', ['data'=>$data]);
    }
}
