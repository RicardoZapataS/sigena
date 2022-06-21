<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    protected $fillable = [
        'date_work',
        'turn',
        'taxiway',
        'threshold',
        'als_approximation',
        'runway_edge_lice',
        'papi',
        'signaling_signs',
        'twr',
        'platform_lights',
        'whirlwind',
        'user_id',
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
