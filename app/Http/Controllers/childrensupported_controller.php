<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\supportedchildren;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class childrensupported_controller extends Controller
{


    public function filter(Request $request)
    {
        $data = childrendata::all();
        $school = $request->input('school_filters', []);
        $location = $request->input('location_filters', []);
        $uniqueschools = array_unique(array_column($data->toArray(), 'school'));
        $uniqueslocations = array_unique(array_column($data->toArray(), 'location'));

        $data = childrendata::when(count($school) > 0, function ($query) use ($school) {
            $query->whereIn('school', $school);
        })
            ->when(count($location) > 0, function ($query) use ($location) {
                $query->whereIn('location', $location);
            })
            ->get();
        return view('adminpage.childrensupported', compact('data', 'uniqueschools', 'uniqueslocations'));
    }


    // GET DATA FROM CHILDREN DATA ONE TO ONE 
    // public function index(){
    //     $data = childrendata::where('support_by', Auth::id())->get();
    //     $uniqueschools = array_unique(array_column($data->toArray(), 'school'));
    //     $uniqueslocations = array_unique(array_column($data->toArray(), 'location'));
    //     return view('adminpage.childrensupported', compact('data','uniqueschools','uniqueslocations'));
    // }


    // GET DATA FROM CHILDREN DATA ONE TO MANY 
    public function index()
    {
        //CHILD HAS SUPPORT BY USER ID
        $datachildrenfilter = supportedchildren::where('user_id', Auth::id())->get(); //GET Everychild that support by UserID
        $child = [];
        foreach ($datachildrenfilter as $dcf) {
            $child[] = $dcf->childrendata_id;
        }
        $data = childrendata::whereIn('id', $child)->get(); //GETDATA CHILD
        $uniqueschools = array_unique(array_column($data->toArray(), 'school'));
        $uniqueslocations = array_unique(array_column($data->toArray(), 'location'));

        return view('adminpage.childrensupported', compact('data', 'uniqueschools', 'uniqueslocations'));
    }
}
