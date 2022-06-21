<?php

use Illuminate\Database\Seeder;
use App\Models\HasRoute;

class HasRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HasRoute::create(
            [
                'model_id' => '1',
                'model_type' => 'App\Models\Area',
                'route_module_id' => '1',
            ]
        );
        HasRoute::create(
            [
                'model_id' => '1',
                'model_type' => 'App\User',
                'route_module_id' => '7',
            ]
        );
        HasRoute::create(
            [
                'model_id' => '1',
                'model_type' => 'App\User',
                'route_module_id' => '12',
            ]
        );
    }
}
