<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class sidebar_controller extends Controller
{
    public function getNotificationCount()
    {
        // Your logic to get the notification count
        //DATA NOTIFIKASI 
        $datanotification1 = notification::where('to',Auth::user()->id)->paginate(10);
        $datanotification2 = notification::whereNull('to')->paginate(10);

        $data3 = [];
        $data3 = $datanotification1->merge($datanotification2) ;
        $data4 = $data3; // MERGE DATA!!
        $datanotification = $data4->where('read_at', null);

        $notificationCount = count($datanotification);

        // Share data with views
        View::share('notificationCount', $notificationCount);
        return view('adminpage.layoutadmin');
}
}