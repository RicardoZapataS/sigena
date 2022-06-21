<?php

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'name' => 'Navegacion y vigilancia',
        ]);
        Area::create([
            'name' => 'Telecomunicaciones',
        ]);
        Area::create([
            'name' => 'Electromecanica',
        ]);
    }
}
