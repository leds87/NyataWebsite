<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;


class userdata extends Authenticatable
{

    use Notifiable;

    protected $guarded=['id'];
    protected $table='userdata';
    public $timestamps=false;

    public function userdata(){
        return $this->belongsTo(userbalance::class);
    }


    // public function childrens()
    // {
    //     return $this->belongsTo(childrendata::class);
    // }
    
    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'User',
                'personid' => Auth::user()->id,
                'description' => (Auth::user() ? Auth::user()->name.' '.'created a record of '.$user->name : 'DB Seeder created a record'),
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
                'typelog' => 'Profile',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'edited a record of '.$user->name .':'.
                implode(', ', $modifiedAttributes).' '.'to'. ' '.
                implode(', ', $modifiedAttributes2)),
            ];
            userlog::create($logData);
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
