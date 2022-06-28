<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'mame',
        'user_id',
    ];

    public function hasRoute(){
        return $this->morphMany(HasRoute::class, 'model');
    }

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
