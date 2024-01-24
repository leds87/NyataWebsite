<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class userlog extends Model
{
    protected $guarded=['id'];
    protected $table='userlog';
    public $timestamps=false;
    
   
}
