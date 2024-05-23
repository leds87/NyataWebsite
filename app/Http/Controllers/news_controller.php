<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admindata;
use App\Models\childrendata;
use App\Models\news;
use App\Models\supportedchildren;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class news_controller extends Controller
{
    public function index()
    {
        $datanews = news::get();
        $datachildren = childrendata::get();
        $mergeddata = new Collection([$datanews, $datachildren]);
        return view('adminpage.news', compact('datanews', 'datachildren'));
        // return view('adminpage.news', ['mergeddata'=>$mergeddata]);
    }

    public function selectchild()
    {
        $data = childrendata::where('name', 'LIKE', '%'.request('q').'%')->paginate(10);
        return response()->json($data);
        // $query = $request->get('query');
        // $child = childrendata::where('name', 'LIKE', "%{$query}%")->get();

    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|max:100',
                'date' => 'required',
                'description' => 'required',
                'category' => 'required',
                'children_id' => 'max:100',
            ]
        );

        //CREATE CUSTOM ID
        $prefix = "U";
        $count = news::count() + 1;

        // Create a formatted ID with a prefix and padded count
        $formattedCount = str_pad($count, 3, '0', STR_PAD_LEFT);
        $customId = $prefix . $formattedCount;

        $data['from'] = auth()->user()->name;
        $data['slug'] = $request->title.'%'.$customId;
        $data['from_slug'] = auth()->user()->slug;
        $data['role'] = auth()->user()->role . ' ' . auth()->user()->log;

        news::create($data);




        return redirect('/adminpage')->with("success", "Your Data Has Been Input!");
    }

    public function destroy($id)
    {
        $data = news::find($id);
        $data->delete();
        return redirect()->route('adminshow')->with("success", "Data Deleted!");
    }

    public function show($slug)
    {
        // $datanews = news::find($id);
        $datanews = news::where('slug',$slug)->first();
        $datachildren = childrendata::find($datanews->children_id);
        $dataadmin2 = admindata::where('slug', $datanews->from_slug)->first();

        return view('adminpage.newsshow', [
            'datanews' => $datanews,
            'datachildren' => $datachildren,
            'dataadmin' => $dataadmin2,
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
        $newschildren = news::whereIn('children_id', $child)->get(); //GETDATA CHILD
        // dd($newschildren);

        $datanull = news::WhereNull('children_id', '')->get(); // CALL NEWS THAT FOR ALL/NULL
        $data3 = [];
        $data3 = $datanull->merge($newschildren); // MERGE DATA!!
        $datanews2 = $data3;

        $collection = new Collection($data3);
        $datanews = $collection->sortByDesc('date');
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
        $date = Carbon::now()->format('Y-m-d');
        return view('adminpage.inputnews', compact('data', 'date'));
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
