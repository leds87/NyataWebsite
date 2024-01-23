<?php

namespace App\Http\Controllers;

use App\Models\childrendata;
use App\Models\news;
use App\Models\userdata;
use App\Models\schooldata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboarduser_controller extends Controller
{
    public function index (){

        // $successchildren = childrendata::where('status', 'success')->count();

        //NEWS FILTER ONLY BY CHILD SUPPORT ID
        $datachildrenfilter =childrendata::where('support_by',Auth::id())->get(); //GET CHILDREN DATA BY SUPPORT SAME AS SUPPORTED CHILDREN
        $filter = [];
        foreach ($datachildrenfilter as $child) {
            $filter[] = $child->id;
        }
        $idfilter = implode(",", $filter); // EVERY ID THAT SUPPORTED SAVE IN ID FILTER result-> 1,4 but doesnt recongnize, 
        $data1 = news::where('children_id',$idfilter)->get(); // CALL CHILD ID THAT SUPPOORTED
        $datanull = news::WhereNull('children_id','')->get(); // CALL NEWS THAT FOR ALL/NULL

        
        $undersupportchild = count($filter);
        
        // for ($i = 0; $i < $undersupportchild; $i++){
        //     $dataloop[i] = a;
        // }
        
        $data3 = [];
        $data3 = $datanull->merge($data1) ;
        $datanews = $data3; // MERGE DATA!!

        // dd($idfilter);

        $datachildren = childrendata::get();
        return view('adminpage.userpage', compact('datanews','datachildren','undersupportchild')
    );
    }
}

