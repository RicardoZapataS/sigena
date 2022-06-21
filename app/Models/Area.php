<?php

namespace App\Models;

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
}
