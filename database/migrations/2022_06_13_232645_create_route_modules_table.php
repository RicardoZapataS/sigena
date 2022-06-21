<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_modules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('route_name');
            $table->string('icon');
            $table->boolean('visible')->default(1);
            $table->unsignedBigInteger('route_module_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_modules');
    }
}
