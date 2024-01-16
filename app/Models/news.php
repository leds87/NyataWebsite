<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class news extends Model
{
    protected $guarded=['id'];
    protected $table='news';
    public $timestamps=false;

    protected static function boot()
    {
        parent::boot();

        // Listen for the created event and log the information

        static::created(function ($news) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'news',
                'personid' => Auth::id(),
                'description' => (Auth::user() ? Auth::user()->name.' '.'created a record of '.$news->title : 'unknown created a record'),
            ];
            adminlog::create($logData);
        });

        static::updated(function ($news) {
            $currentDate = now()->format('j F Y');
            $modifiedAttributes = array_keys($news->getDirty());
            $modifiedAttributes2 = $news->getDirty(); //get value of 
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'news',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'updated a record of '.".$news->title.".' '.
                implode(', ', $modifiedAttributes).' '.'to'. ' '.
                implode(', ', $modifiedAttributes2)),
            ];
            adminlog::create($logData);
        });
                // 'admin_id' => Auth::id(),
                // 'name' => (Auth::user() ? Auth::user()->name: 'unknown'),
                // 'log_id' => $currentDate.'_'.uniqid(),
                // 'action' => (Auth::user() ? Auth::user()->name . ' updated a record' : 'unknown updated a record'),
                // 'data' => json_encode($modifiedAttributes),  
                // 'data' => json_encode($admin->only(['name', 'address', 'phone','role','note'])),  

        static::deleted(function ($news) {
            $currentDate = now()->format('dmY');
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'news',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'deleted a record of '.$news->title),
            ];
            adminlog::create($logData);
        });
    }
}
