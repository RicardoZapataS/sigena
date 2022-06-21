<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RouteModule extends Model
{
    protected $fillable = [
        'name',
        'route_name',
        'icon',
        'visible',
        'route_module_id',
    ];

    protected $casts = [
        'visible' => 'boolean',
    ];
    public function routes(){
        return $this->hasMany(RouteModule::class);
    }
    public function routeModule(){
        return $this->belongsTo(RouteModule::class);
    }
}
