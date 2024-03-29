<?php

namespace App\Http\Controllers;

use App\Models\childrendata;
use App\Models\news;
use App\Models\notification;
use App\Models\userdata;
use App\Models\schooldata;
use App\Models\supportedchildren;
use App\Models\userbalance;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboarduser_controller extends Controller
{

    public function index()
    {
        //CHILDREN ONLY MANY TO MANY

        //CHILD HAS SUPPORT BY USER ID
        $datachildrenfilter = supportedchildren::where('user_id', Auth::id())->get(); //GET Everychild that support by UserID
        $child = [];
        foreach ($datachildrenfilter as $dcf) {
            $child[] = $dcf->childrendata_id;
        }
        $childrendata = childrendata::whereIn('id', $child)->get(); //GETDATA CHILD


        //NEWS FILTER ONLY BY CHILD SUPPORT ID
        $filter = [];
        foreach ($datachildrenfilter as $childnews) {
            $filter[] = $childnews->childrendata_id;
        }
        $data1 = news::whereIn('children_id', $filter)->get(); // CALL CHILD ID THAT SUPPOORTED
        $datanull = news::WhereNull('children_id', '')->get(); // CALL NEWS THAT FOR ALL/NULL
        $data3 = [];
        $data3 = $datanull->merge($data1);
        // $datanews = $data3; // MERGE DATA!!

        $collection = new Collection($data3);
        $datanews = $collection->sortByDesc('id');

        //EXPECTED SUPPORT BALANCE
        $a2 = []; //GET Required Donation from every child
        foreach ($childrendata as $a3) {
            $a2[] = $a3->required_donation;
        }
        $expectedsupport = array_sum($a2);



        //SUPPORTED KIDS
        $undersupportchild = count($child); // CALL SUPPORTED CHILD
        $successchild = childrendata::whereIn('id', $child)->where('status', 'Success')->get(); //GET SUCCESS CHILD DATA
        $sc = [];
        foreach ($successchild as $gc) {
            $sc[] = $gc->id;
        }
        $graduatedchild = count($sc);

        $datachildren = childrendata::get();


        // //DATA NOTIFIKASI 
        // $datanotification1 = notification::where('to',Auth::user()->id)->paginate(10);
        // $datanotification2 = notification::whereNull('to')->paginate(10);

        // $data3 = [];
        // $data3 = $datanotification1->merge($datanotification2) ;
        // $data4 = $data3; // MERGE DATA!!
        // $datanotification = $data4->where('read_at', null);

        // $notificationCount = count($datanotification);

        //LAST MONTH SUPPORT
        $currentMonth = now()->format('m');
        if ($currentMonth == 1) {
            // If the current month is January, set $previousMonth to December and decrement the year
            $previousMonth = 12;
            $currentYear = now()->format('Y');
            $previousYear = $currentYear - 1;
        } else {
            // For other months, simply subtract 1 from the current month
            $previousMonth = '0' . $currentMonth - 1;
            $previousYear = now()->format('Y');
        }
        $totallastmonthvalue = userbalance::where('month', $previousMonth . '-' . $previousYear)->get(); //SUPPORT FOR LAST MONTH

        $lastmonth = [];
        foreach ($totallastmonthvalue as $lmv) {
            $lastmonth[] = $lmv->amount;
        }
        $totallastmonthsupport = array_sum($lastmonth);



        return view(
            'adminpage.userpage',
            compact('datanews','totallastmonthsupport', 'datachildren', 'undersupportchild', 'graduatedchild', 'expectedsupport')
        );
    }
}



    //CHILDREN ONLY ONE TO ONE
    // public function index (){
    //     
        
    //     //NEWS FILTER ONLY BY CHILD SUPPORT ID
    //     $datachildrenfilter =childrendata::where('support_by',Auth::id())->get(); //GET CHILDREN DATA BY SUPPORT SAME AS SUPPORTED CHILDREN
    //     $filter = [];
    //     foreach ($datachildrenfilter as $child) {
    //         $filter[] = $child->id;
    //     }
    //     $idfilter = implode(",", $filter); // EVERY ID THAT SUPPORTED SAVE IN ID FILTER result-> 1,4 but doesnt recongnize, 
    //     $data1 = news::where('children_id',$idfilter)->get(); // CALL CHILD ID THAT SUPPOORTED
    //     $datanull = news::WhereNull('children_id','')->get(); // CALL NEWS THAT FOR ALL/NULL

        

    //     $undersupportchild = count($filter);// CALL SUPPORTED CHILD
    //     $successchild =childrendata::where('support_by',Auth::id())->where('status','Success')->get(); //GET CHILDREN DATA BY SUPPORT SAME AS SUPPORTED CHILDREN
    //     $sc = [];
    //     foreach($successchild as $gc){
    //         $sc[] = $gc->id;
    //     }
    //     $graduatedchild = count($sc);

        
    //     // for ($i = 0; $i < $undersupportchild; $i++){
    //     //     $dataloop[i] = a;
    //     // }
        
    //     $data3 = [];
    //     $data3 = $datanull->merge($data1) ;
    //     $datanews = $data3; // MERGE DATA!!

    //     // dd($idfilter);

    //     $datachildren = childrendata::get();
    //     return view('adminpage.userpage', compact('datanews','datachildren','undersupportchild','graduatedchild')
    // );
    // }
