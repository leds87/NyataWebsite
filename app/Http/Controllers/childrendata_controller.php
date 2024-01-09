<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use Illuminate\Http\Request;

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
            ]
            );
            childrendata::create($data);
            return redirect('/adminpage')->with("success","Your Data Has Been Input!");
    }
    
    public function showdata(){
        $data=childrendata::all();
        return view('adminpage.childrenshow', ['data'=>$data]);
    }

    public function destroy($id)
    {
        $data = childrendata::find($id);
        $data->delete();
        return view('adminpage.childrenshow')->with("success","Data Deleted!");
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
