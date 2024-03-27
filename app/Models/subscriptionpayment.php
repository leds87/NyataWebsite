<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscriptionpayment extends Model
{
    protected $guarded=['id'];
    protected $table='subscriptionpayments';
    public $timestamps=false;

}
