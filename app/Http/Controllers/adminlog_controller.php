<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\adminlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminlog_controller extends Controller
{
    public function index()
    {
        $data = adminlog::where('personid',Auth::user()->id)->paginate(10);
        
        return view('adminpage.adminlog', compact('data'));
    }
}
