<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\news;
use App\Models\supportedchildren;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class news_controller extends Controller
{
    public function index()
    {
        $datanews = news::get();
        $datachildren = childrendata::get();
        $mergeddata = new Collection([$datanews,$datachildren]);
        return view('adminpage.news',compact('datanews','datachildren'));
        // return view('adminpage.news', ['mergeddata'=>$mergeddata]);
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|max:100',
                'date'=> 'required',
                'description' => 'required',
                'category'=> 'required',
                'children_id'=> 'max:100',
            ]
            );
            $data['from'] = auth()->user()->name;
            $data['role'] = auth()->user()->role.' '.auth()->user()->log;
            
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
        // $slug = $datanews->slug;
        // $datanews2 = news::find($slug);
        // dd($datanews2);
        $datachildren = childrendata::find($datanews->children_id);

        return view('adminpage.newsshow', [
            'datanews' => $datanews,
            'datachildren' => $datachildren,
        ]);
    }

    public function newsusershow()
    {
        //CHILD HAS SUPPORT BY USER ID
        $datachildrenfilter = supportedchildren::where('user_id', Auth::id())->get(); //GET Everychild that support by UserID
        $child = [];
        foreach ($datachildrenfilter as $dcf) {
            $child[] = $dcf->childrendata_id;
        }
        $newschildren = news::whereIn('id', $child)->get(); //GETDATA CHILD
        
        $datanull = news::WhereNull('children_id', '')->get(); // CALL NEWS THAT FOR ALL/NULL
        $data3 = [];
        $data3 = $datanull->merge($newschildren);
        $datanews = $data3; // MERGE DATA!!
        // dd($datanews);

        // $datanews = news::find($id);
        // $slug = $datanews->slug;
        // $datanews2 = news::find($slug);
        // dd($datanews2);
        // $datachildren = childrendata::find($datanews->children_id);

        return view('adminpage.newsusershow', compact('datanews'));
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
