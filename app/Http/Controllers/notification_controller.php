<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admindata;
use App\Models\childrendata;
use App\Models\notification;
use App\Models\userdata;
use App\Notifications\NewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;


class notification_controller extends Controller
{
    public function notificationusershow(){
        $datanotification = notification::where('to',Auth::user()->id)->paginate(10);
        
        $datauser = userdata::get();
        // $notifications = Auth::user()->unreadNotifications;

        // return response()->json(['notifications' => $notifications]);
        return view('adminpage.notificationusershow', compact('datanotification','datauser'));
    }

    public function index(){
        $datanotification = notification::get();
        $datachildren = childrendata::get();
        $dataadmin = admindata::get();
        $datauser = userdata::get();
        return view('adminpage.notification', compact('datanotification','datachildren','dataadmin','datauser'));
    }

    public function store(Request $request){

        $data = $request->validate(
            [
                'date'=> 'required',
                'from' => 'required',
                'to'=> 'max:100',
                'title'=> 'required',
                'description'=> 'required',
            ]
            );
            notification::create($data);
            return redirect('/adminpage')->with("success","Your Data Has Been Input!");
    }

    public function destroy($id)
    {
        $data = notification::find($id);
        $data->delete();
        return redirect('/adminpage')->with("success", "Data Deleted!");
    }

    public function show($id)
    {
        $datanotification = notification::find($id);
        $datachildren = childrendata::find($id);
        $datauser = userdata::find($id);
        $data = childrendata::find($id);
        return view('adminpage.newsshow', compact('datanotification','datachildren','datauser'));
    }

    public function inputnotificationpage()
    {
        // $data = childrendata::all();
        $datauser = userdata::all();
        $datanotification = notification::all();
        return view('adminpage.inputnotification',  compact('datanotification','datauser'));
    }

    public function update(Request $request, $id)
    {
        $data = notification::find($id);

        $data->date = $request->date;
        $data->from = $request->from;
        $data->to = $request->to;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return redirect('adminpage')->with("success", "Data Notification" . $data->id . ' Updated');
    }
    public function edit($id)
    {
        $datanotification = notification::find($id);
        $datauser = userdata::all();
        return view('adminpage.notificationedit', compact('datanotification','datauser'));
    }

    // public function notify(){
    //     if(auth()->user()){
    //         $user = userdata::whereId(7)->first();
    //         auth()->user()->notify(new NewNotification($user));
    //     }
    // }

    public function markasread($id){
        if($id){
            auth()->user()->unreadNotifications->where('id',$id)->markasread();
        }
        return back();
    }


    
}
