<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrderTelecomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_order_telecoms', function (Blueprint $table) {
            $table->id();
            $table->string('team');
            $table->string('brand');
            $table->string('model_type');
            $table->string('serial');
            $table->string('power');
            $table->string('sensitivity');
            $table->string('frequency');
            $table->string('origin');
            $table->string('type_job');
            $table->string('fails');
            $table->string('causes');
            $table->string('revision');
            $table->string('observation');
            $table->string('time_attention');
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
        Schema::dropIfExists('work_order_telecoms');
    }
}
