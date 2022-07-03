<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class WorkOrderTelecom extends Model
{
    protected $fillable = [
        'team',
        'brand',
        'model_type',
        'serial',
        'power',
        'sensitivity',
        'frequency',
        'origin',
        'type_job',
        'fails',
        'causes',
        'revision',
        'observation',
        'time_attention',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
