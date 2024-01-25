<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\image;
use App\Models\schooldata;
use App\Models\supportedchildren;
use App\Models\userdata;
use App\Models\userlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class childrendata_controller extends Controller
{
    public function store(Request $request)
    {
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
        ]);

        // Upload and associate multiple images
        if ($request->hasFile('Images')) {
            foreach ($request->file('Images') as $image) {
                $filename = date('Y-m-d') . $image->getClientOriginalName();
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
        return redirect('childrenshow')->with("success", "Data Deleted!");
    }

    public function update(Request $request, $id)
    {
        $data = childrendata::find($id);

        $data->name = $request->name;
        $data->school = $request->school;
        $data->location = $request->location;
        $data->age = $request->age;
        $data->story = $request->story;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->save();

        return redirect('adminpage')->with("success", "Data ".$data->name. ' has been updated.'.' ');
    }


    public function edit($id)
    {
        $data = childrendata::find($id);
        $datauser = userdata::all();
        $dataschool = schooldata::all();
        return view('adminpage.childrenedit', [
            'data' => $data,
            'datauser' => $datauser,
            'dataschool' => $dataschool,
        ]);
    }
}
