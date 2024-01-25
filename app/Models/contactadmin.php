<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class contactadmin extends Model
{
    protected $guarded=['id'];
    protected $table='contactadmin';
    public $timestamps=false;

    protected static function boot()
    {
        parent::boot();

        // Listen for the created event and log the information

        static::created(function ($admincontact) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                'typelog' => 'contactadmin',
                'personid' => (Auth::id() ? : null),
                'description' => (Auth::user() ? Auth::user()->name.' '.'contacted admin about '.$admincontact->subject : 'DB Seeder created a record'),
            ];
            userlog::create($logData);
        });

}
}
