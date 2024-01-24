<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $guarded=['children_id'];
    protected $table='images';

        // // Define a many-to-one relationship with childrendata
        // public function child()
        // {
        //     return $this->belongsTo(childrendata::class);
        // }
}
