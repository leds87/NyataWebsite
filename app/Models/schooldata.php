<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class schooldata extends Model
{
    protected $guarded=['id'];
    protected $table='schooldata';
    public $timestamps=false;


    protected static function boot()
    {
        parent::boot();

        // Listen for the created event and log the information

        static::created(function ($school) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'School',
                'personid' => (Auth::id() ? : null),
                'description' => (Auth::user() ? Auth::user()->name.' '.'created a record on School '.$school->school_name : 'DB Seeder created a record'),
            ];
            adminlog::create($logData);
        });

        static::updated(function ($school) {
            $currentDate = now()->format('j F Y');
            $modifiedAttributes = array_keys($school->getDirty());
            $modifiedAttributes2 = $school->getDirty(); //get value of 
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'School',
                'personid' => (Auth::id() ? : null),
                'description' => (Auth::user()->name.' '.'updated a record of '.$school->school_name.' '.
                implode(', ', $modifiedAttributes).' '.'to'. ' '.
                implode(', ', $modifiedAttributes2)),
            ];
            adminlog::create($logData);
        });
        static::deleted(function ($school) {
            $currentDate = now()->format('dmY');
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'School',
                'personid' => (Auth::id() ? : null),
                'description' => (Auth::user()->name.' '.'deleted a record of '.$school->school_name),
            ];
            adminlog::create($logData);
        });
    }

}
