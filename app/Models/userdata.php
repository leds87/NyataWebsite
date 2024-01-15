<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;


class userdata extends Authenticatable
{
    protected $guarded=['id'];
    protected $table='userdata';
    public $timestamps=false;

    protected static function boot()
    {
        parent::boot();

        // Listen for the created event and log the information

        static::created(function ($user) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'User',
                'personid' => Auth::id(),
                'description' => (Auth::user() ? Auth::user()->name.' '.'created a record of '.$user->name : 'unknown created a record'),
            ];
            adminlog::create($logData);
        });

        static::updated(function ($user) {
            $currentDate = now()->format('j F Y');
            $modifiedAttributes = array_keys($user->getDirty());
            $modifiedAttributes2 = $user->getDirty(); //get value of 
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'User',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'updated a record of '.$user->name.' '.
                implode(', ', $modifiedAttributes).' '.'to'. ' '.
                implode(', ', $modifiedAttributes2)),
            ];
            adminlog::create($logData);
        });

        static::deleted(function ($user) {
            $currentDate = now()->format('dmY');
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'User',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'deleted a record of '.$user->name),
            ];
            adminlog::create($logData);
        });
    }
}
