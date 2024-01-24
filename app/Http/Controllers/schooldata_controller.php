<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\schooldata;
use Illuminate\Http\Request;

class schooldata_controller extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'school_name' => 'required|max:100',
                'address'=> 'required',
                'location' => 'required',
                'children'=> 'required',
                'status'=> 'required',
            ]
            );
            schooldata::create($data);
            return redirect('/adminpage')->with("success","Your Data Has Been Input!");
    }
    
    public function showdata(){
        $data=schooldata::all();
        return view('adminpage.schoolshow', ['data'=>$data]);
    }

    public function destroy($id)
    {
        $data = schooldata::find($id);
        $data->delete();
        return redirect('schoolshow')->with("success","Data Deleted!");
    }

    public function update(Request $request, $id)
    {
        $data = schooldata::find($id);

        $data->school_name = $request->school_name;
        $data->address = $request->address;
        $data->location = $request->location;
        $data->children = $request->children;
        $data->status = $request->status;
    

        $data->save();
        return redirect('adminpage')->with("success","Data Updated");
        


    }
    public function edit($id)
    {
        // dd($id);
        $data = schooldata::find($id);
        $laststatus = schooldata::find($id,'status');
        $data2 = $data->value('school_name');
        // dd($laststatus);
        return view ('adminpage.editschool',[
            'data'=>$data,
            // 'laststatus' => $data->value('schoolname'), 
        ]);
    }
}
