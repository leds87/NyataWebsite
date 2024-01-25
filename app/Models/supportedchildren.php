<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class supportedchildren extends Model
{
    protected $guarded=['id'];
    protected $table='supportedchildren';
    public $timestamps=false;

    
    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $currentDate = now()->format('j F Y');
            $childrenname = childrendata::where('id',$user->childrendata_id)->value('name');
            $logData = [
                'date' => $currentDate,
                'typelog' => 'Choose Child',
                'personid' => Auth::user()->id,
                'description' => (Auth::user() ? Auth::user()->name.' '.'support children of children name : '. $childrenname : 'DB Seeder created a record'),
            ];
            userlog::create($logData);
        });

        static::updated(function ($user) {
            // dd($userlog);
            $currentDate = now()->format('j F Y');
            $childrenname = childrendata::where('id',$user->childrendata_id)->value('name');
            if ($user->isDirty('user_id')) {
                userlog::create([
                    'date' => $currentDate,
                    'typelog' => 'Choose Child',
                    'personid' => Auth::user()->id,
                    'description' => (Auth::user()->name.' '.'unsupport children of children name  '.$user->$childrenname),
                    // 'log_message' => "User {$user->getOriginal('user_id')} has stopped supporting child {$user->id}",
                ]);
            }
        });
        


        // static::updated(function ($user) {
        //     $currentDate = now()->format('j F Y');
        //     $childrenname = childrendata::where('id',$user->childrendata_id)->value('name');
        //     $modifiedAttributes2 = $user->getDirty(); //get value of 
        //     dd($modifiedAttributes2);
        //     $logData = [
        //         'date' => $currentDate,
        //         'typelog' => 'Choose Child',
        //         'personid' => Auth::id(),
        //         'description' => (Auth::user()->name.' '.'unsupport children of children name  '.$user->$childrenname),
        //     ];
        //     userlog::create($logData);
            
        // });

        static::deleted(function ($user) {
            $currentDate = now()->format('dmY');
            $childrenname = childrendata::where('id',$user->childrendata_id)->value('name');
            $logData = [
                'date' => $currentDate,
                'typelog' => 'Choose Child',
                'personid' => Auth::user()->id,
                'description' => (Auth::user()->name.' '.'unsupport children of children name  '.$user->$childrenname),
            ];
            userlog::create($logData);
        });

    }
}
