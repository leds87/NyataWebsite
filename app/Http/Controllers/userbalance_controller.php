<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\schooldata;
use App\Models\supportedchildren;
use App\Models\userbalance;
use App\Models\userdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


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

            // 'recurring' => array(
            //     'required' => true,
            //     'start_time' => "2024-04-25 15:07:00 +0700",
            //     'interval_unit' => "month"
            // ),


        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // dd($snapToken);


        //Total amount donation in 1 ID
        // $userdata = userbalance::where('user_id', auth()->user()->id)->where('status', 'LIKE', '%' . 'Success' . '%')->get(); //TOTAL AMOUNT OF DONATION
        $userdata = userbalance::where('user_id', auth()->user()->id)->where('status_code', '200')->get(); //TOTAL AMOUNT OF DONATION
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

        $transactionhistory = userbalance::orderBy('date', 'desc')
            ->where('user_id', auth()->user()->id)
            ->get();
        // dd($transactionhistory);
        return view('adminpage.userbalanceview', compact('transactionhistory', 'expectedsupport', 'countchildren', 'snapToken', 'totaldonation', 'lastmonthsupport'));
    }

    public function postpayment(Request $request)
    {
        $json = json_decode($request->get('json'));
        // return $request;
        // dd($json);

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
                'status' => $json->transaction_status,
                'status_code' => $json->status_code,
                'user_id' => auth()->user()->id,
                'email' => auth()->user()->email,
                'amount' => $json->gross_amount,
                'payment_type' => $json->payment_type,
                'payment_code' => optional($json)->payment_code ?? null,
                'pdf_url' => optional($json)->pdf_url ?? null,
                'va_bank' => optional($json)->va_numbers[0]->bank ?? null,
                'va_number' => optional($json)->va_numbers[0]->va_number ?? null,
                'date' => $json->transaction_time,
                'month' => now()->format('m-Y'),
                'totalsupportedchild' => $countchildren,
            ]
        );

        userbalance::create($data);
        return redirect('userbalance');
    }

    public function moneyinformationdata()
    {

        //SUM amount of donation
        $userbalance2 = userbalance::where('status', 'LIKE', '%' . 'Success' . '%')->get(); //TOTAL AMOUNT OF DONATION
        $userbalance = userbalance::all(); //data

        $data = userbalance::orderBy('date', 'desc')->get(); //data
        // $data = userbalance::with('users')->get(); //data
        // dd($data);
        // $data = userbalance::join('userdata', 'id', '=', 'userbalance.user_id')            
        // ->select('userdata.name as userdata_name')->get(); //data

        // $nameuser = userdata::join('userbalance', 'user_id', '=', 'userdata.id')
        //     ->select('userdata.name as userdata_name')->get();

        // dd($data);




        $transactionhistory = userbalance::where('user_id', auth()->user()->id);

        $amount = [];
        foreach ($userbalance2 as $ud) {
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
            $previousMonth = '0' . $currentMonth - 1;
            $previousYear = now()->format('Y');
        }
        $totallastmonthvalue = userbalance::where('month', $previousMonth . '-' . $previousYear)->get(); //SUPPORT FOR LAST MONTH

        $lastmonth = [];
        foreach ($totallastmonthvalue as $lmv) {
            $lastmonth[] = $lmv->amount;
        }
        $totallastmonthsupport = array_sum($lastmonth);

        //TOTALUSERDONATED
        $user1 = [];
        foreach ($userbalance as $us) {
            $user1[] = $us->user_id;
        }
        $totaluserdonated = count(array_unique($user1));

        //TOTALUSERDOESNTDONATED
        $totaluser = userdata::count();
        $totaluserdoesntdoanted = $totaluser - $totaluserdonated;
        // dd($totaluserdoesntdoanted);

        //TOTALCHILDREN
        $totalchildren = childrendata::count();
        // dd($totalchildren);

        //SUPPORTED CHILDREN
        $totalsc1 = supportedchildren::all();
        $totalsc2 = array_unique(array_column($totalsc1->toArray(), 'childrendata_id'));
        $totalsupportedchildren = count($totalsc2);

        //NOT SUPPORTED CHILDREN
        $notsupportedchildren = $totalchildren - $totalsupportedchildren;
        // dd($notsupportedchildren);

        //TOTALDONATIONNEEDED
        $sch = schooldata::sum('required_donation');
        $chd = schooldata::sum('children');
        $totaldonationneed = $sch * $chd;
        // dd($totaldonationneed);



        $currentMonthlocalized = now()->format('F');

        $datauser = userdata::all();
        $users = userdata::all();
        // $uid = $userbalance->pluck('user_id');
        // $datauser = userdata::whereIn('id',$uid)->get(['id','name']);
        // $datauser = userdata::whereIn('id',$uid)->pluck('name');

        // $ub = userbalance::first();
        // $datauser = json_encode($ub ? userdata::find($ub->user_id)->name : 'Unknown');
        // dd($datauser);

        return view('adminpage.moneyinformationdata', compact('users', 'datauser', 'data', 'transactionhistory', 'currentMonthlocalized', 'totallastmonthsupport', 'totalchildren', 'totaluser', 'totaluserdoesntdoanted', 'totaldonationneed', 'totaldonation', 'totaluserdonated', 'totalsupportedchildren', 'totalchildren', 'notsupportedchildren'));
    }

    public function userbalancehistory()
    {
        $transactionhistory = userbalance::orderBy('date', 'desc')
            ->where('user_id', auth()->user()->id)
            ->get();

        return view('adminpage.userbalancehistory', compact('transactionhistory'));
    }

    public function acreatesubscription()
    {
        $response = Http::post('https://api.sandbox.midtrans.com/v1/subscriptions', [
            'name' => 'MONTHLY_2019',
            'amount' => '14000',
            'currency' => 'IDR',
            'payment_type' => 'gopay',
            'token' => 'eyJ0eXBlIjogIkdPUEFZX1dBTExFVCIsICJpZCI6ICIifQ==',
            'schedule' => [
                'interval' => 1,
                'interval_unit' => 'month',
                'max_interval' => 12,
                'start_time' => '2020-07-22 07:25:01 +0700',
            ],
            'metadata' => [
                'description' => 'Recurring payment for A',
            ],
            'customer_details' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'johndoe@email.com',
                'phone' => '+62812345678',
            ],
            'gopay' => [
                'account_id' => '0dd2cd90-a9a9-4a09-b393-21162dfb713b',
            ],
        ]);

        // Process the response
        $responseData = $response->json();

        dd($responseData);
        // Do something with the response data
        return $responseData;
    }

    public function bcreatesubscription()
    {
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


        // Make a POST request to the API endpoint
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => 'Basic U0ItTWlkLXNlcnZlci1JSkJYdlVOdFgxdnozRTJ3c1FsUEd3NVI6',
            'content-type' => 'application/json',
        ])->post('https://api.sandbox.midtrans.com/v1/subscriptions', [
            [
                "name" => "MONTHLY_2019",
                "amount" => "14000",
                "currency" => "IDR",
                "payment_type" => "gopay",
                "token" => "eyJ0eXBlIjogIkdPUEFZX1dBTExFVCIsICJpZCI6ICIifQ==",
                "schedule" => [
                    "interval" => 1,
                    "interval_unit" => "month",
                    "max_interval" => 12,
                    "start_time" => "2020-07-22 07:25:01 +0700"
                ],
                "metadata" => [
                    "description" => "Recurring payment for A"
                ],
                "customer_details" => [
                    "first_name" => "John",
                    "last_name" => "Doe",
                    "email" => "johndoe@email.com",
                    "phone" => "+62812345678"
                ],
                "gopay" => [
                    "account_id" => "0dd2cd90-a9a9-4a09-b393-21162dfb713b"
                ],
            ]

        ]);
        // Process the response
        // $responseData = $response->json();

        // dd($responseData);
        // Do something with the response data
        // return $responseData;

        $snapToken = \Midtrans\Snap::getSnapToken($response);
        return $snapToken;
    }

    public function dcreateSubscription(Request $request)
    {
        /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php) composer require midtrans/midtrans-php
                              
        Alternatively, if you are not using **Composer**, you can download midtrans-php library (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require the file manually.                                                                                
        require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-IJBXvUNtX1vz3E2wsQlPGw5R';

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'payment_type' => 'credit_card',
            'credit_card'  => array(
                'token_id'      => $_POST['token_id'],
                'authentication' => true,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );

        $response = \Midtrans\CoreApi::charge($params);
        dd($response);

        // $cardauth = [
        //     "card_number" => "4811111111111114",
        //     "card_exp_month" => "01",
        //     "card_exp_year" => "2025",
        //     "card_cvv" => "123",
        //     "client_key" => "SB-Mid-client-_wxRytc85Z3IwRI6"
        // ];

        // // Send a POST request to the API endpoint
        // $auth = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     'Accept' => 'application/json',
        //     'Authorization' => 'SB-Mid-client-_wxRytc85Z3IwRI6',
        // ])->post('https://api.sandbox.midtrans.com/v2/token', $cardauth);

        // $cardtoken = $auth;

        // //SAMPAI SINI UDH OK, BNER


        // // Define the request payload
        // $payload = [
        //     "name" => "MONTHLY_SUBSCRIPTION",
        //     "amount" => "100000",
        //     "currency" => "IDR",
        //     "payment_type" => "credit_card",
        //     "token" => $cardtoken,
        //     "schedule" => [
        //         "interval" => 1,
        //         "interval_unit" => "month",
        //         "max_interval" => 12
        //     ]
        // ];

        // // Send a POST request to the API endpoint
        // $response = Http::withHeaders([
        //     'Authorization' => 'SB-Mid-server-IJBXvUNtX1vz3E2wsQlPGw5R',
        //     'Content-Type' => 'application/json',
        //     'Accept' => 'application/json',
        // ])->post('https://api.sandbox.midtrans.com/v1/subscriptions', $payload);

        // dd($response);
        // // Process the response
        // $responseData = $response->json();

        // // Return the response data or do something else with it
        // return $responseData;
    }

    private function agenerateToken()
    {
        // Define the token request payload
        $tokenPayload = [
            "card_number" => "4811111111111114",
            "card_exp_month" => "01",
            "card_exp_year" => "2025",
            "card_cvv" => "123",
            "client_key" => "<YOUR_CLIENT_KEY>", // Replace with your client key
        ];

        // Send a POST request to generate token
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Basic <YOUR_CLIENT_KEY_ENCODED_IN_BASE64>', // Replace with your client key encoded in base64
        ])->post('https://api.sandbox.midtrans.com/v2/token', $tokenPayload);

        // Process the token response
        $tokenResponse = $response->json();

        return $tokenResponse;
    }

    public function abcreatesubscription(Request $request)
    {
        // Define the request payload
        $payload = [
            "name" => "MONTHLY_SUBSCRIPTION",
            "amount" => "100000",
            "currency" => "IDR",
            "payment_type" => "credit_card",
            "token" => $this->generateToken(),
            "schedule" => [
                "interval" => 1,
                "interval_unit" => "month",
                "max_interval" => 12
            ]
        ];

        // Send a POST request to generate token
        $tokenResponse = $this->generateToken();

        // Extract token from token response
        $token = $tokenResponse['token'];

        // Set token in payload
        $payload['token'] = $token;

        // Send a POST request to the API endpoint to create subscription
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Basic <YOUR_SERVER_KEY_ENCODED_IN_BASE64>', // Replace with your server key encoded in base64
        ])->post('https://api.sandbox.midtrans.com/v1/subscriptions', $payload);

        // Process the response
        $responseData = $response->json();

        // Return the response data or do something else with it
        return $responseData;
    }
}
