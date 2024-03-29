<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\schooldata;
use App\Models\supportedchildren;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class schooldata_controller extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'school_name' => 'required|max:100',
                'address' => 'required',
                'location' => 'required',
                'children' => 'required',
                'status' => 'required',
                'required_donation' => 'required',
            ]
        );
        schooldata::create($data);
        return redirect('/adminpage')->with("success", "Your Data Has Been Input!");
    }

    public function showdata()
    {
        $data = schooldata::all();
        return view('adminpage.schoolshow', ['data' => $data]);
    }

    public function destroy($id)
    {
        $data = schooldata::find($id);
        $data->delete();
        return redirect('schoolshow')->with("success", "Data Deleted!");
    }

    public function update(Request $request, $id)
    {
        $data = schooldata::find($id);
        // dd($request);

        try {
            // $validator = Validator::make($request->all(), [
            //     'children' => 'required|integer|min:0',
            //     // Add other validation rules as needed
            // ]);

            // if ($validator->fails()) {
            //     return redirect('adminpage')
            //         ->withErrors($validator->errors()->first('children', 'Updating data has error!'))
            //         ->withInput();
            // }

            $data->school_name = $request->school_name;
            $data->address = $request->address;
            $data->location = $request->location;
            $data->children = $request->children;
            $data->required_donation = $request->required_donation;
            $data->status = $request->status;

            $data->save();
        } catch (\Exception $e) {
            // Log the exception or handle it in a way that makes sense for your application
            return redirect('adminpage')->withErrors(["error" => "An error occurred: " . $e->getMessage()]);
        }

        return redirect('adminpage')->with("success", 'Data ' . $data->school_name . ' has been updated');

        // $data->school_name = $request->school_name;
        // $data->address = $request->address;
        // $data->location = $request->location;
        // $data->children = $request->children;
        // $data->status = $request->status;

        // $data->save();
        // if (session()->has('success')) {
        //     return redirect('adminpage')->with("success", 'Data ' . $data->school_name . ' has been updated');
        // } elseif (session()->has('error')) {
        //     return redirect('adminpage')->withErrors(["error" => "An error occurred!"]);
        // }
    }
    public function edit($id)
    {
        $data = schooldata::find($id);
        return view('adminpage.editschool', compact('data'));
    }

    public function schoolinformationdata()
    {
        $data = schooldata::all();
        $totalschool = schooldata::count();
        $activeschool = schooldata::where('status', 'active')->count();
        $inactiveschool = schooldata::where('status', 'inactive')->count();

        $childrencount = childrendata::count();

        //SUPPORTED CHILDREN
        $totalsc1 = supportedchildren::all();
        $totalsc2 = array_unique(array_column($totalsc1->toArray(), 'childrendata_id'));
        $totalsupportedchildren = count($totalsc2);

        //NOT SUPPORTED CHILDREN
        $notsupportedchildren = $childrencount - $totalsupportedchildren;
        
        return view('adminpage.schoolinformationdata', compact('notsupportedchildren','totalsupportedchildren','childrencount','totalschool','activeschool','inactiveschool','data'));
    }
}
