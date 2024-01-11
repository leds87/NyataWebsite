<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\logdata;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $data = logdata::get();

        return view('adminpage.log', compact('data'));
    }
}
