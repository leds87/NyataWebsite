<?php

namespace App\Http\Controllers;

use App\Models\childrendata;
use App\Models\userdata;
use App\Models\schooldata;
use App\Models\supportedchildren;
use App\Models\userbalance;
use Illuminate\Http\Request;

class dashboard_controller extends Controller
{
    public function index()
    {
        $activeschool = schooldata::where('status', 'active')->count();
        $inactiveschool = schooldata::where('status', 'inactive')->count();
        $activechildren = childrendata::where('status', 'active')->count();
        $educatedchildren = childrendata::where('status', 'educated')->count();
        $successchildren = childrendata::where('status', 'success')->count();
        $activeusers = userdata::where('status', 'active')->count();
        $inactiveusers = userdata::where('status', 'inactive')->count();
        $postponeusers = userdata::where('status', 'postpone')->count();

        //Total AMOUNT of donation
        $userbalance2 = userbalance::where('status', 'LIKE', '%' . 'Success' . '%')->get(); //TOTAL AMOUNT OF DONATION
        $amount = [];
        foreach ($userbalance2 as $ud) {
            $amount[] = $ud->amount;
        }
        $totaldonation = array_sum($amount);

        $user1 = [];
        foreach ($userbalance2 as $us) {
            $user1[] = $us->user_id;
        }
        $totaluserdonated = count(array_unique($user1));
        

        //SUPPORTED CHILDREN
        $totalsc1 = supportedchildren::all();
        $totalsc2 = array_unique(array_column($totalsc1->toArray(), 'childrendata_id'));
        $totalsupportedchildren = count($totalsc2);




        return view('adminpage.adminpage', [

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

            'totaldonation' => $totaldonation,
            'totalsupportedchildren' => $totalsupportedchildren,
            'totaluserdonated' => $totaluserdonated,

        ]);
    }
}
