<?php

namespace App\Http\Controllers;

use App\Models\childrendata;
use App\Models\news;
use App\Models\userdata;
use App\Models\schooldata;
use Illuminate\Http\Request;

class dashboarduser_controller extends Controller
{
    public function index (){
        $activeschool = schooldata::where('status', 'active')->count();
        $inactiveschool = schooldata::where('status', 'inactive')->count();
        $activechildren = childrendata::where('status', 'active')->count();
        $educatedchildren = childrendata::where('status', 'educated')->count();
        $successchildren = childrendata::where('status', 'success')->count();
        $activeusers = userdata::where('status', 'active')->count();
        $inactiveusers = userdata::where('status', 'inactive')->count();
        $postponeusers = userdata::where('status', 'postpone')->count();
        $datanews = news::get();

        return view('adminpage.userpage', [

            'usercount' => $activeusers + $inactiveusers + $postponeusers,
            'activeusers' => $activeusers,
            'inactiveusers' => $inactiveusers,
            'postponeusers' => $postponeusers,

            'schoolcount' => $activeschool + $inactiveschool,
            'activeschool' => $activeschool,
            'inactiveschool' => $inactiveschool,
            
            'childrencount' => $activechildren + $educatedchildren + $successchildren,
            'activechildren' => $activechildren,
            'educatedchildren' => $educatedchildren,
            'successchildren' => $successchildren,
            'datanews' => $datanews,

        ]);


        return view('adminpage.userpage',compact('datanews'));
    }




}
