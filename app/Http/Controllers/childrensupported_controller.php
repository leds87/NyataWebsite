<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use Illuminate\Http\Request;

class childrensupported_controller extends Controller
{
    public function filter (Request $request){
        $data=childrendata::all();
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
        return view('adminpage.childrensupported', compact('data','uniqueschools','uniqueslocations'));
    }

    public function index(){
        $data=childrendata::all();
        $uniqueschools = array_unique(array_column($data->toArray(), 'school'));
        $uniqueslocations = array_unique(array_column($data->toArray(), 'location'));
        // $uniqueslocations =$data->pluck('location')->unique()->values()->all();
        return view('adminpage.childrensupported', compact('data','uniqueschools','uniqueslocations'));
    }
}
