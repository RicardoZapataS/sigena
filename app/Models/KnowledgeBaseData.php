<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class KnowledgeBaseData extends Model
{
    protected $fillable = [
        'team',
        'date_event',
        'time_event',
        'type_fail',
        'date_attention',
        'time_attention',
        'time_rehabilitation',
        'performed_action',
        'replaced',
        'notam',
        'user_id',
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
