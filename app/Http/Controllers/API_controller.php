<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\userbalance;
use Illuminate\Http\Request;

class API_controller extends Controller
{
    public function payment_handler(Request $request){
        $json = json_decode($request->getContent());
        $signature_key = hash('sha512',$json->order_id . $json->status_code . $json->gross_amount . env('MIDTRANS_SERVER_KEY'));

        if($signature_key != $json->signature_key){
            return abort(404);
        }

        // status berhasil
        $order = userbalance::where('order_id', $request->order_id)->first();
        return $order->update(['status'=>'Success, transaction is found']);
    }
}
