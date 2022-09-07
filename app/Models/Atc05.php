<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Atc05 extends Model
{
    protected $fillable = [
        'company',
        'indent',
        'departure',
        'arrival',
        'departure_hour',
        'arrival_hour',
        'real_arrival_hour',
        'type',
        'fly',
        'route',
        'observation',
        'tuition',
        'cc',
        'er',
        'bk',
        'user_id',
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
