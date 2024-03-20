<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\supportedchildren;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class childrennotsupported_controller extends Controller
{

    public function filter(Request $request)
    {
        //CHILD HAS NOT SUPPORT BY USER ID MANY TO MANY
        $datachildrenfilter = supportedchildren::where('user_id', Auth::id())->get(); //GET Everychild that support by UserID
        $child = [];
        foreach ($datachildrenfilter as $dcf) {
            $child[] = $dcf->childrendata_id;
        }

        // $data = childrendata::whereNotIn('id', $child)->get(); //GETDATA Not Supported CHILD

        $data = childrendata::whereNotIn('id', $child)->get();
        $school = $request->input('school_filters', []);
        $location = $request->input('location_filters', []);
        $uniqueschools = array_unique(array_column($data->toArray(), 'school'));
        $uniqueslocations = array_unique(array_column($data->toArray(), 'location'));

        $data = childrendata::whereNotIn('id', $child)

            ->when(count($school) > 0, function ($query) use ($school) {
                $query->whereIn('school', $school);
            })
            ->when(count($location) > 0, function ($query) use ($location) {
                $query->whereIn('location', $location);
            })
            ->get();
        return view('adminpage.childrennotsupported', compact('data', 'uniqueschools', 'uniqueslocations'));
    }

    //ONE TO ONE
    // public function index(){
    //     $data = childrendata::where('support_by','!=',Auth::id())->orWhereNull('support_by','')->get();
    //     $uniqueschools = array_unique(array_column($data->toArray(), 'school'));
    //     $uniqueslocations = array_unique(array_column($data->toArray(), 'location'));
    //     return view('adminpage.childrennotsupported',compact('data','uniqueschools','uniqueslocations'));
    // }

    public function index()
    {
        //CHILD HAS NOT SUPPORT BY USER ID MANY TO MANY
        $datachildrenfilter = supportedchildren::where('user_id', Auth::id())->get(); //GET Everychild that support by UserID
        $child = [];
        foreach ($datachildrenfilter as $dcf) {
            $child[] = $dcf->childrendata_id;
        }

        $data = childrendata::whereNotIn('id', $child)->get(); //GETDATA Not Supported CHILD
        $uniqueschools = array_unique(array_column($data->toArray(), 'school'));
        $uniqueslocations = array_unique(array_column($data->toArray(), 'location'));
        return view('adminpage.childrennotsupported', compact('data', 'uniqueschools', 'uniqueslocations'));
    }
}
