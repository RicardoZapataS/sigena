<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LostThing extends Model
{
    protected  $fillable = [
        'date',
        'hour',
        'type_thing',
        'color',
        'area',
        'person_find',
        'business_find',
        'person_notification',
        'business_notification',
        'r_supervisor',
        'r_ray_x',
        'r_felcn',
        'r_police',
        'content_inside',
        'observation',
        'image',
        'date_delivered',
        'hour_delivered',
        'person_delivered',
        'ci_delivered',
        'observation_delivered',
        'r_supervisor_delivered',
        'r_felcn_delivered',
        'r_police_delivered',
        ];
}
