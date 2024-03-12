<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userbalance extends Model
{
    protected $guarded=['id'];
    protected $table='userbalance';
    public $timestamps=false;

    public function users(){
        return $this->hasMany(userdata::class);
    }
}
