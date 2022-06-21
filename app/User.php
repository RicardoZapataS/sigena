<?php

namespace App;

use App\Models\Area;
use App\Models\HasRoute;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'area_id', 'super_user'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'super_user' => 'boolean',
    ];

    public function hasRoute(){
        return $this->morphMany(HasRoute::class, 'model');
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }
}
