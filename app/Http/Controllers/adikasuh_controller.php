<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\schooldata;
use Illuminate\Http\Request;

class adikasuh_controller extends Controller
{
    public function index(){
            $childrencount = childrendata::count();
            $totalschool = schooldata::count();
            return view('adikasuh', compact('childrencount','totalschool'));
    }
}
