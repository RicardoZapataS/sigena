<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRecord extends Model
{
    protected $fillable = [
        'date_maintenance',
        'turn',
        'activity_name',
        'activity_ident',
        'business',
        'description',
        'description',
        'observation',
        'alarm',
        'user_id',
    ];
    protected $casts = [
        'alarm' => 'boolean',
    ];
    public  function user(){
        return $this->belongsTo(User::class);
    }
}
