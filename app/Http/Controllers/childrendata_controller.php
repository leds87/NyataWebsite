<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class childrendata_controller extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|max:100',
                'school'=> 'required',
                'location' => 'required',
                'age'=> 'required',
                'story'=> 'required',
                'description'=> 'required',
                'status'=> 'required',
                'Images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
            );
            $datastore = childrendata::create([
                'name' => $data['name'],
                'school'=> $data['school'],
                'location' => $data['location'],
                'age'=> $data['age'],
                'story'=> $data['story'],
                'description'=> $data['description'],
                'status'=> $data['status'],
            ]);
            // dd($request);
            // Upload and associate multiple images
        if ($request->hasFile('Images')) {
            foreach ($request->file('Images') as $image) {
                $filename = date('Y-m-d') . $image->getClientOriginalName();
                $path = $image->storeAs('admin-images', $filename, 'public');
        
                // Create image record in the database
                $datastore->images()->create([
                    'filename' => $filename,
                    'path' => $path,
                ]);
            }
        }

            // if ($request->hasFile('image')){

            //     $photo = $request->file('Images');
            //     $filename = date('Y-m-d').$photo->getClientOriginalName();
            //     $path = 'children-images/'.$filename;
            //     Storage::disk('public')->put($path,file_get_contents($photo));
            //     $datastore['image'] = $filename;
                
            // }
            //     childrendata::create($datastore);





            return redirect('/adminpage')->with("success","Your Data Has Been Input!");
    }
    
    public function showdata(){
        $data=childrendata::all();
        return view('adminpage.childrenshow', ['data'=>$data]);
    }

    public function childrensupported(){
        $data=childrendata::all();
        return view('adminpage.childrensupported', ['data'=>$data]);
    }

    public function destroy($id)
    {
        $data = childrendata::find($id);
        $data->delete();
        return redirect('childrenshow')->with("success","Data Deleted!");
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
        return redirect('childrenshow')->with("success","Data Updated");
    
    }
    public function edit($id)
    {
        $data = childrendata::find($id);
        return view ('adminpage.childrenedit',[
            'data'=>$data,
        ]);
    }

}
