<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\supportedchildren;
use App\Models\userlog;
use App\Notifications\NewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class childrensupported_controller extends Controller
{


    public function filter(Request $request)
    {
        //CHILD HAS SUPPORT BY USER ID
        $datachildrenfilter = supportedchildren::where('user_id', Auth::id())->get(); //GET Everychild that support by UserID FROM MANY TO MANY TABLE
        $child = []; //GET ALL DATA, SAVE IN ONE ARRAY, DATA STILL FROM MANY TO MANY TABLE
        foreach ($datachildrenfilter as $dcf) {
            $child[] = $dcf->childrendata_id;
        }



        $data = childrendata::whereIn('id', $child)->get(); //GETDATA ALL CHILD THAT SUPPORT BY ID 


        // $data = childrendata::all();
        $school = $request->input('school_filters', []);
        $location = $request->input('location_filters', []);
        $uniqueschools = array_unique(array_column($data->toArray(), 'school'));
        $uniqueslocations = array_unique(array_column($data->toArray(), 'location'));

        $data = childrendata::whereIn('id', $child)
        ->when(count($school) > 0, function ($query) use ($school) {
            $query->whereIn('school', $school);
        })
            ->when(count($location) > 0, function ($query) use ($location) {
                $query->whereIn('location', $location);
            })
            ->get();
        return view('adminpage.childrensupported', compact('data', 'uniqueschools', 'uniqueslocations'));
    }


    // GET DATA FROM CHILDREN DATA ONE TO ONE 
    // public function index(){
    //     $data = childrendata::where('support_by', Auth::id())->get();
    //     $uniqueschools = array_unique(array_column($data->toArray(), 'school'));
    //     $uniqueslocations = array_unique(array_column($data->toArray(), 'location'));
    //     return view('adminpage.childrensupported', compact('data','uniqueschools','uniqueslocations'));
    // }


    // GET DATA FROM CHILDREN DATA ONE TO MANY 
    public function index()
    {
        //CHILD HAS SUPPORT BY USER ID
        $datachildrenfilter = supportedchildren::where('user_id', Auth::id())->get(); //GET Everychild that support by UserID FROM MANY TO MANY TABLE
        $child = []; //GET ALL DATA, SAVE IN ONE ARRAY, DATA STILL FROM MANY TO MANY TABLE
        foreach ($datachildrenfilter as $dcf) {
            $child[] = $dcf->childrendata_id;
        }
        $data = childrendata::whereIn('id', $child)->get(); //GETDATA ALL CHILD THAT SUPPORT BY ID 

        $uniqueschools = array_unique(array_column($data->toArray(), 'school')); //TO SHOW What filter that can available for school filter.
        $uniqueslocations = array_unique(array_column($data->toArray(), 'location')); //TO SHOW What filter that can available for location filter.



        //  //FOR PAYMENT!//
        // // Set your Merchant Server Key
        // \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // // \Midtrans\Config::$serverKey = 'SB-Mid-server-IJBXvUNtX1vz3E2wsQlPGw5R';
        // // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        // \Midtrans\Config::$isProduction = false;
        // // Set sanitization on (default)
        // \Midtrans\Config::$isSanitized = true;
        // // Set 3DS transaction for credit card to true
        // \Midtrans\Config::$is3ds = true;

        // $params = array(
        //     'transaction_details' => array(
        //         'order_id' => rand(),
        //         'gross_amount' => $childrendata = childrendata::whereIn('id', $child)->get(); //GETDATA CHILD //GETDATA CHILD,
        //     ),
        //     'customer_details' => array(
        //         'first_name' => auth()->user()->name,
        //         'email' => auth()->user()->email,
        //         'phone' => auth()->user()->phone,
        //         'address' => auth()->user()->address,
        //     ),
        //     'item_details' => array(
        //         [
        //             'id' => auth()->user()->name . '_' . auth()->user()->id,
        //             'price' => $expectedsupport,
        //             'quantity' => '1',
        //             'name' => 'Donation for' . ' ' . $countchildren . ' ' . 'Supported Child',
        //         ]
        //     ),
        //     'support_detail' => array(
        //         'total_supported_child' => $countchildren,
        //     ),

        //     // 'recurring' => array(
        //     //     'required' => true,
        //     //     'start_time' => "2024-04-25 15:07:00 +0700",
        //     //     'interval_unit' => "month"
        //     // ),


        // );
        // $snapToken = \Midtrans\Snap::getSnapToken($params);



        return view('adminpage.childrensupported', compact('data', 'uniqueschools', 'uniqueslocations'));
    }

    public function updatesupport($id)
    {
        $data = childrendata::find($id);
        // $data->support_by = Auth::id();
        // $data->save();

        // Many to Many
        $data->users()->create(
            [
                'user_id' => Auth::id(),
            ]
        );

        return redirect('childrensupported')->with("success", 'Now you support ' . $data->name . ' ');
    }

    public function updateunsupport($id)
    {
        $data = childrendata::find($id);
        // $data->support_by = null;
        // $data->save();

        // Many to Many
        $data->users()->delete([
            // 'user_id' => null,
        ]);
        $currentDate = now()->format('j F Y');
        userlog::create([
            'date' => $currentDate,
            'typelog' => 'Choose Child',
            'personid' => Auth::id(),
            'description' => (Auth::user()->name . ' ' . 'unsupport children : ' . $data->name),
        ]);

        $user = auth()->user(); // Assuming the user is authenticated
        // $user->notify(new NewNotification($user));
        $additionaldata = [
            'date' => $currentDate,
            'description' => (Auth::user()->name . ' ' . 'unsupport children' . $data->name),
        ];
        Notification::send($user, new NewNotification());
        
        return redirect()->back()->with('success', "Now you not supported " . $data->name);
        // return redirect('childrensupported')->with('success', "You not supported " . $data->name . "again..");
    }
}
