<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class news_controller extends Controller
{
    public function index()
    {
        return view('adminpage.news');
    }
}
