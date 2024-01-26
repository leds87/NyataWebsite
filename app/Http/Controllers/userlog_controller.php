<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\userlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userlog_controller extends Controller
{
    public function index()
    {
        $data = userlog::where('personid',Auth::user()->id)->paginate(10);
        return view('adminpage.userlog', compact('data'));
    }
}
