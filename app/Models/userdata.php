<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdata extends Model
{
    protected $guarded=['id'];
    protected $table='userdata';
    public $timestamps=false;
}
