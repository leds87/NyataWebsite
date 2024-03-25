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
                'date' => now()->format('d-m-Y H:i:s'),
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

    public function createsubscription()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.sandbox.midtrans.com/v1/subscriptions",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'customer_details' => [
                    'first_name' => 'Budi',
                    'last_name' => 'Utomo',
                    'email' => 'budi.utomo@midtrans.com',
                    'phone' => '081223323423',
                    'customer_details_required_fields' => [
                        'email',
                        'first_name',
                        'phone'
                    ]
                ]
            ]),
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Basic U0ItTWlkLXNlcnZlci1JSkJYdlVOdFgxdnozRTJ3c1FsUEd3NVI6",
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
}
