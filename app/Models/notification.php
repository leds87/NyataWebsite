<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class notification extends Model
{
    protected $guarded = ['id'];
    protected $table ='notification';
    public $timestamps = false;
    
    protected static function boot()
    {
        parent::boot();

        // Listen for the created event and log the information

        static::created(function ($notification) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                'typelog' => 'notif',
                'personid' => (Auth::id() ? : null),
                'description' => (Auth::user() ? Auth::user()->name.' '.'created a record of notification '.$notification->title : 'DB Seeder created a record'),
            ];
            adminlog::create($logData);
        });

        static::updated(function ($notification) {
            $currentDate = now()->format('j F Y');
            $modifiedAttributes = array_keys($notification->getDirty());
            $modifiedAttributes2 = $notification->getDirty(); //get value of 
            $logData = [
                'date' => $currentDate,
                'typelog' => 'notif',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'updated a record of '.$notification->title.' '.
                implode(', ', $modifiedAttributes).' '.'to'. ' '.
                implode(', ', $modifiedAttributes2)),
            ];
            adminlog::create($logData);
        });
        static::deleted(function ($notification) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                'typelog' => 'notif',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'deleted a record of '.$notification->title),
            ];
            adminlog::create($logData);
        });
    }
}
