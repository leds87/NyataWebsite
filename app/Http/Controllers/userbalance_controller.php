<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\childrendata;
use App\Models\supportedchildren;
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
        return view('adminpage.userbalanceview', compact('expectedsupport', 'countchildren'));
    }

    public function paydonation()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-IJBXvUNtX1vz3E2wsQlPGw5R';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            // 'item_details' => json_decode($_POST['items'], true),

            'customer_details' => array(
                'first_name' => 'budi',
                'email' => 'budi@mail.com',
                'phone' => '0848468464',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        //  dd($snapToken);

        return view('adminpage.paydonation', compact('snapToken'));

    }
}
