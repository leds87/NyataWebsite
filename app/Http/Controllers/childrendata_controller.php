<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\image;
use App\Models\notification;
use App\Models\schooldata;
use App\Models\supportedchildren;
use App\Models\userdata;
use App\Models\userlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Termwind\Components\Dd;

class childrendata_controller extends Controller
{
    public function store(Request $request)
    {
        //INPUT CHILDREN MINIMUM REQUIRED DONATION
        $schooldata = $request->school;
        $required_donation = schooldata::where('school_name', $schooldata)->value('required_donation'); //GET School Required Minimum Donation

        $data = $request->validate([
            'name' => 'required|max:100',
            'school' => 'required',
            'location' => 'required',
            'age' => 'required',
            'story' => 'required',
            'description' => 'required',
            'status' => 'required',
            'Images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        // Create the child without images
        $child = childrendata::create([
            'name' => $data['name'],
            'school' => $data['school'],
            'location' => $data['location'],
            'age' => $data['age'],
            'story' => $data['story'],
            'description' => $data['description'],
            'status' => $data['status'],
            'required_donation' => $required_donation,
        ]);

        // Upload and associate multiple images
        if ($request->hasFile('Images')) {
            foreach ($request->file('Images') as $image) {
                // $filename = date('Y-m-d') . $image->getClientOriginalName();
                $filename = date('Y-m-d') . $request->name . '_child image';
                $path = $image->storeAs('children-images', $filename, 'public');

                // Associate the image with the child
                $child->images()->create([
                    'filename' => $filename,
                    'path' => $path,
                ]);
            }
        }
        return redirect('/childrenshow')->with("success", "Your Data Has Been Input!");
    }

    public function showdata()
    {
        $data = childrendata::all();
        return view('adminpage.childrenshow', ['data' => $data]);
    }

    public function getstore()
    {
        $dataschool = schooldata::all();
        return view('adminpage.inputchildren', compact('dataschool'));
    }


    public function destroy($id)
    {
        $data = childrendata::find($id);
        $data->delete();

        $data->images()->delete([]);

        return redirect('childrenshow')->with("success", "Data Deleted!");
    }

    public function update(Request $request, $id)
    {
        $data = childrendata::find($id);

        //INPUT CHILDREN MINIMUM REQUIRED DONATION
        $schooldata = $request->school;
        $required_donation = schooldata::where('school_name', $schooldata)->value('required_donation'); //GET School Required Minimum Donation

        $data->name = $request->name;
        $data->school = $request->school;
        $data->location = $request->location;
        $data->age = $request->age;
        $data->story = $request->story;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->required_donation = $required_donation;

        // dd($request->oldImage);

        $data->save();
        $savedChanges = $data->getChanges();

        // Delete current images MULTIPLE
        $filenames =   $data->images->pluck('filename')->toArray();
        if ($request->oldImages) {
            $data->images()->delete([]);

            foreach ($filenames as $filename) {
                Storage::disk('public')->delete('children-images/' . $filename);
            }
        }

        if ($request->hasFile('Images')) {
            foreach ($request->file('Images') as $image) {
                // $filename = date('Y-m-d') . $image->getClientOriginalName();
                $filename = date('Y-m-d') . $request->name . '_child image' . $image->getClientOriginalName();
                $path = $image->storeAs('children-images', $filename, 'public');


                // Associate the image with the child
                $data->images()->updateOrCreate([
                    'filename' => $filename,
                    'path' => $path,
                ]);
            }
        }


        $datasend = $request->has('sendnotif');

        //IF TRUE SEND TO KAKAK ASUH
        if ($datasend == "true") {
            $data3 = supportedchildren::where('childrendata_id', $id)->get();

            //DAPETIN USER ID BRP YANG SUPPORT
            $userid = [];
            foreach ($data3 as $dcf) {
                $userid[] = $dcf->user_id;
            }

            $currentDate = now()->format('Y-m-d');
            foreach ($userid as $uid) {
                $modifiedAttributes = array_keys($savedChanges); //columns that affected
                $modifiedAttributes2 = $savedChanges; //get value of 
                $data =
                    [
                        'date' => $currentDate,
                        'from' => Auth::user()->name . ' [Administrator]',
                        'to' => $uid,
                        'title' => ('Updated a record of ' . $request->name),
                        'description' => (Auth::user()->name . ' ' . 'updated a record of ' . $request->name . ' ' .
                            implode(', ', $modifiedAttributes) . ' ' . 'to' . ' ' .
                            implode(', ', $modifiedAttributes2)),
                    ];
                notification::create($data);
            }
        }
        return redirect('adminpage')->with("success", "Data " . $request->name . ' has been updated.' . ' ');
    }


    public function edit($id)
    {
        $data = childrendata::find($id);
        $datauser = userdata::all();
        $dataschool = schooldata::all();
        // $dataimages = $id;
        $imagedata = image::where('childrendata_id', $id)->get();
        // dd($imagedata);
        return view('adminpage.childrenedit', compact('imagedata', 'data', 'datauser', 'dataschool'));
    }


    public function childinformationdata()
    {
        $data = childrendata::all();
        $activechildren = childrendata::where('status', 'active')->count();
        $educatedchildren = childrendata::where('status', 'educated')->count();
        $successchildren = childrendata::where('status', 'success')->count();
        $childrencount = childrendata::count();

        //SUPPORTED CHILDREN
        $totalsc1 = supportedchildren::all();
        $totalsc2 = array_unique(array_column($totalsc1->toArray(), 'childrendata_id'));
        $totalsupportedchildren = count($totalsc2);

        //NOT SUPPORTED CHILDREN
        $notsupportedchildren = $childrencount - $totalsupportedchildren;
        // dd($notsupportedchildren);



        return view('adminpage.childinformationdata', compact('notsupportedchildren','totalsupportedchildren','data', 'childrencount', 'activechildren', 'educatedchildren', 'successchildren'));
    }
}
