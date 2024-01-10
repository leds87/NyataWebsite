<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class userdata extends Model
{
    protected $guarded=['id'];
    protected $table='userdata';
    public $timestamps=false;
}
