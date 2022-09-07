<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Atc04 extends Model
{
    protected $fillable = [
        'tuition',
        'type',
        'company',
        'fly',
        'route',
        'departure',
        'departure_hour',
        'arrival',
        'arrival_hour',
        'observation',
        'cc',
        'er',
        'bk',
        'airstrip',
        'user_id',
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
