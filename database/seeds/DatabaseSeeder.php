<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(RouteModuleSeeder::class);
        $this->call(HasRouteSeeder::class);
        $this->call(KnowledgeDataSeeder::class);
    }
}
