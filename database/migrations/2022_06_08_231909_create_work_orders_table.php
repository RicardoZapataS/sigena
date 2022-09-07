<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->id();
            $table->date('date_work');
            $table->string('turn');
            $table->string('hour_start');
            $table->string('hour_end');
            $table->string('taxiway')->nullable();
            $table->string('threshold16')->nullable();
            $table->string('threshold34')->nullable();
            $table->string('als_approximation16')->nullable();
            $table->string('als_approximation34')->nullable();
            $table->string('runway_edge_lice')->nullable();
            $table->string('papi16')->nullable();
            $table->string('papi34')->nullable();
            $table->string('signaling_signs')->nullable();
            $table->string('twr')->nullable();
            $table->string('platform_lightspp')->nullable();
            $table->string('platform_lightspapa')->nullable();
            $table->string('platform_lightspc1')->nullable();
            $table->string('whirlwind16')->nullable();
            $table->string('whirlwind34')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('work_orders');
    }
}
