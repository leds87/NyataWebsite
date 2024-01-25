<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class admindata extends Authenticatable
{
    protected $guarded=['id'];
    protected $table='admindata';
    public $timestamps=false;

    protected static function boot()
    {
        parent::boot();

        // Listen for the created event and log the information

        static::created(function ($admin) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                'typelog' => 'Admin',
                'personid' => (Auth::id() ? : null),
                'description' => (Auth::user() ? Auth::user()->name.' '.'created a record of '.$admin->name : 'DB Seeder created a record'),
            ];
            adminlog::create($logData);
        });

        static::updated(function ($admin) {
            $currentDate = now()->format('j F Y');
            $modifiedAttributes = array_keys($admin->getDirty());
            $modifiedAttributes2 = $admin->getDirty(); //get value of 
            $logData = [
                'date' => $currentDate,
                'typelog' => 'Admin',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'updated a record of '.$admin->getOriginal('name').' '.
                implode(', ', $modifiedAttributes).' '.'to'. ' '.
                implode(', ', $modifiedAttributes2)),
            ];
            adminlog::create($logData);
        });


        static::deleted(function ($admin) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                'typelog' => 'Admin',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'deleted a record of '.$admin->name),
            ];
            adminlog::create($logData);
        });

    }
    
}
