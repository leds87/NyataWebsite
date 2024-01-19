<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\news;
use Illuminate\Http\Request;

class news_controller extends Controller
{
    public function index()
    {
        $datanews = news::get();
        return view('adminpage.news',compact('datanews'));
        return view('adminpage.userpage',compact('datanews'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|max:100',
                'date'=> 'required',
                'description' => 'required',
                'category'=> 'required',
                'children_id'=> 'required',
            ]
            );
            news::create($data);
            return redirect('/adminpage')->with("success","Your Data Has Been Input!");
    }

    public function destroy($id)
    {
        $data = news::find($id);
        $data->delete();
        return redirect()->route('adminshow')->with("success", "Data Deleted!");
    }

    public function show($id)
    {
        $datanews = news::find($id);
        return view('adminpage.newsshow', [
            'datanews' => $datanews,
        ]);
    }

    public function showchildrenid()
    {
        $data = childrendata::all();
        return view('adminpage.inputnews', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = news::find($id);

        $data->title = $request->title;
        $data->date = $request->date;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->children_id = $request->children_id;
        $data->save();
        return redirect('adminpage')->with("success", "Data Updated");
    }
    public function edit($id)
    {
        $datanews = news::find($id);
        return view('adminpage.newsedit', [
            'datanews' => $datanews,
        ]);
    }
}