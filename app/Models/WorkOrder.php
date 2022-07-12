<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    protected $fillable = [
        'date_work',
        'turn',
        'hour_start',
        'hour_end',
        'taxiway16',
        'taxiway34',
        'threshold16',
        'threshold34',
        'als_approximation16',
        'als_approximation34',
        'runway_edge_lice',
        'papi16',
        'papi34',
        'signaling_signs',
        'twr',
        'platform_lightspp',
        'platform_lightspapa',
        'platform_lightspc1',
        'whirlwind16',
        'whirlwind34',
        'user_id',
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
