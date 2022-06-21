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
            $table->string('taxiway')->nullable();
            $table->string('threshold')->nullable();
            $table->string('als_approximation')->nullable();
            $table->string('runway_edge_lice')->nullable();
            $table->string('papi')->nullable();
            $table->string('signaling_signs')->nullable();
            $table->string('twr')->nullable();
            $table->string('platform_lights')->nullable();
            $table->string('whirlwind')->nullable();
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
