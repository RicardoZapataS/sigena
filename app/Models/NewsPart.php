<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class NewsPart extends Model
{
    protected $fillable = [
        'report',
        'turn',
        'note',
        'date',
        'user_id',
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
