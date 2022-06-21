<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasRoute extends Model
{
    protected $fillable = [
        'model_id',
        'model_type',
        'route_module_id',
    ];

    public function model(){
        return $this->morphTo();
    }

    public function route_module(){
        return $this->belongsTo(RouteModule::class);
    }
}
