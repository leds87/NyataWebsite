<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logdata extends Model
{
    protected $guarded=['id'];
    protected $table='logdata';
    public $timestamps=false;

    public function admin()
    {
        return $this->belongsTo(admindata::class);
    }
}
