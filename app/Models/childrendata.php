<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class childrendata extends Model
{
    protected $guarded=['id'];
    protected $table='childrendata';
    public $timestamps=false;

    public function users()
    {
        return $this->hasMany(userdata::class);
    }

    public function images()
    {
        return $this->hasMany(image::class);
    }
    
    protected static function boot()
    {
        parent::boot();

        // Listen for the created event and log the information

        static::created(function ($children) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'Children',
                'personid' => Auth::id(),
                'description' => (Auth::user() ? Auth::user()->name.' '.'created a record of '.$children->name : 'unknown created a record'),
            ];
            adminlog::create($logData);
        });

        static::updated(function ($children) {
            $currentDate = now()->format('j F Y');
            $modifiedAttributes = array_keys($children->getDirty());
            $modifiedAttributes2 = $children->getDirty(); //get value of 
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'Children',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'updated a record of '.$children->name.' '.
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

        static::deleted(function ($children) {
            $currentDate = now()->format('j F Y');
            $logData = [
                'date' => $currentDate,
                // 'id' => Auth::id(),
                'typelog' => 'Children',
                'personid' => Auth::id(),
                'description' => (Auth::user()->name.' '.'deleted a record of '.$children->name),
            ];
            adminlog::create($logData);
        });
    }
}
