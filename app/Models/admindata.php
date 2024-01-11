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
            $currentDate = now()->format('dmY');
            $logData = [
                'admin_id' => Auth::id(),
                'name' => (Auth::user() ? Auth::user()->name: 'unknown'),
                'log_id' => $currentDate.'_'.uniqid(),
                'action' => (Auth::user() ? Auth::user()->name . '_created a record' : 'unknown_created a record'),
                'data' => json_encode($admin->only(['name', 'address', 'phone','role','note'])),  
            ];
            logdata::create($logData);
        });

        static::updated(function ($admin) {
            $currentDate = now()->format('dmY');
            $modifiedAttributes = $admin->getDirty();
            $logData = [
                'admin_id' => Auth::id(),
                'name' => (Auth::user() ? Auth::user()->name: 'unknown'),
                'log_id' => $currentDate.'_'.uniqid(),
                'action' => (Auth::user() ? Auth::user()->name . ' updated a record' : 'unknown updated a record'),
                'data' => json_encode($modifiedAttributes),  
                // 'data' => json_encode($admin->only(['name', 'address', 'phone','role','note'])),  
            ];
            logdata::create($logData);
        });

        static::deleted(function ($admin) {
            $currentDate = now()->format('dmY');
            $logData = [
                'admin_id' => Auth::id(),
                'name' => (Auth::user() ? Auth::user()->name : 'unknown'),
                'log_id' => $currentDate.'_'.uniqid(),
                'action' => (Auth::user() ? Auth::user()->name . ' deleted a record' : 'unknown deleted a record'),
                'data' => json_encode($admin->only(['name', 'address', 'phone','role','note'])),  
            ];
            logdata::create($logData);
        });
    }
    
}
