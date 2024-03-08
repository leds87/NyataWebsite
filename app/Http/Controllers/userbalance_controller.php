<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\supportedchildren;
use App\Models\userbalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userbalance_controller extends Controller
{
    public function index()
    {
        //CHILD HAS SUPPORT BY USER ID
        $datachildrenfilter = supportedchildren::where('user_id', Auth::id())->get(); //GET Everychild that support by UserID
        $child = [];
        foreach ($datachildrenfilter as $dcf) {
            $child[] = $dcf->childrendata_id;
        }
        $childrendata = childrendata::whereIn('id', $child)->get(); //GETDATA CHILD
        $countchildren = count($childrendata);
        //EXPECTED SUPPORT BALANCE
        $a2 = []; //GET Required Donation from every child
        foreach ($childrendata as $a3) {
            $a2[] = $a3->required_donation;
        }
        $expectedsupport = array_sum($a2);

        //FOR PAYMENT!//

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // \Midtrans\Config::$serverKey = 'SB-Mid-server-IJBXvUNtX1vz3E2wsQlPGw5R';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $expectedsupport,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->phone,
                'address' => auth()->user()->address,
            ),
            'item_details' => array(
                [
                    'id' => auth()->user()->name . '_' . auth()->user()->id,
                    'price' => $expectedsupport,
                    'quantity' => '1',
                    'name' => 'Donation for' . ' ' . $countchildren . ' ' . 'Supported Child',
                ]
            ),
            'support_detail' => array(
                'total_supported_child' => $countchildren,
            ),

        );


        $snapToken = \Midtrans\Snap::getSnapToken($params);
    

        //Total AMOUNT of donation
        $userdata = userbalance::where('user_id', auth()->user()->id)->where('status','LIKE','%'.'Success'.'%')->get(); //TOTAL AMOUNT OF DONATION
        $amount = [];
        foreach ($userdata as $ud) {
            $amount[] = $ud->amount;
        }
        $totaldonation = array_sum($amount);


        //LAST MONTH SUPPORT
        $currentMonth = now()->format('m');

        if ($currentMonth == 1) {
            // If the current month is January, set $previousMonth to December and decrement the year
            $previousMonth = 12;
            $currentYear = now()->format('Y');
            $previousYear = $currentYear - 1;
        } else {
            // For other months, simply subtract 1 from the current month
            $previousMonth = $currentMonth - 1;
            $previousYear = now()->format('Y');
        }

        // Now you have $currentMonth, $previousMonth, $currentYear, and $previousYear

        $lastmonthvalue = userbalance::where('user_id', auth()->user()->id)->where('month', $previousMonth)->get(); //SUPPORT FOR LAST MONTH
        $lastmonth = [];
        foreach ($lastmonthvalue as $lmv) {
            $lastmonth[] = $lmv->amount;
        }
        $lastmonthsupport = array_sum($lastmonth);
        // dd($lastmonthsupport);
        return view('adminpage.userbalanceview', compact('expectedsupport', 'countchildren', 'snapToken', 'totaldonation','lastmonthsupport'));
    }
    public function postpayment(Request $request)
    {
        $json = json_decode($request->get('json'));
        //CHILD HAS SUPPORT BY USER ID
        $datachildrenfilter = supportedchildren::where('user_id', Auth::id())->get(); //GET Everychild that support by UserID
        $child = [];
        foreach ($datachildrenfilter as $dcf) {
            $child[] = $dcf->childrendata_id;
        }
        $childrendata = childrendata::whereIn('id', $child)->get(); //GETDATA CHILD
        $countchildren = count($childrendata);


        $data = (
            [
                'transaction_id' => $json->transaction_id,
                'order_id' => $json->order_id,
                'status' => $json->status_message,
                'user_id' => auth()->user()->id,
                'email' => auth()->user()->email,
                'amount' => $json->gross_amount,
                'payment_type' => $json->payment_type,
                'date' => now()->format('d-m-Y H:i:s'),
                'month' => now()->format('m-Y'),
                'totalsupportedchild' => $countchildren,
            ]
        );
        userbalance::create($data);
        return redirect('userbalance');
    }
}
