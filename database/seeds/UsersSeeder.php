<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ricardo',
            'last_name' => 'Zapata Subirana',
            'area_id' => '1',
            'email' => 'ricardolociorz@gmail.com',
            'password' => Hash::make('wasori2020'),
            'super_user' => '1',
        ]);
        User::create([
            'name' => 'Franklin',
            'last_name' => 'Pinto Sanchez',
            'area_id' => '1',
            'email' => 'fpintos@naabol.gob.bo',
            'password' => Hash::make('naabol1234'),
        ]);
        User::create([
            'name' => 'Luis',
            'last_name' => 'Flores Usquiano',
            'area_id' => '1',
            'email' => 'lfloresu@naabol.gob.bo',
            'password' => Hash::make('naabol1234'),
        ]);
        User::create([
            'name' => 'Richard',
            'last_name' => 'Guzman Villarroel',
            'area_id' => '1',
            'email' => 'rguzmanv@naabol.gob.bo',
            'password' => Hash::make('naabol1234'),
        ]);
        User::create([
            'name' => 'Rodrigo',
            'last_name' => 'Tejerina Rosas',
            'area_id' => '1',
            'email' => 'rtejerinar@naabol.gob.bo',
            'password' => Hash::make('naabol1234'),
        ]);
    }
}
