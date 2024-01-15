<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\adminlog;
use Illuminate\Http\Request;

class adminlog_controller extends Controller
{
    public function index()
    {
        $data = adminlog::get();

        return view('adminpage.adminlog', compact('data'));
    }
}
