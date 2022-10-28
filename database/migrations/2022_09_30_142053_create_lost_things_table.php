<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostThingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_things', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('hour');
            $table->string('type_thing');
            $table->string('color');
            $table->string('area');
            $table->string('person_find');
            $table->string('business_find');
            $table->string('person_notification');
            $table->string('business_notification');
            $table->string('r_supervisor');
            $table->string('r_ray_x')->nullable();
            $table->string('r_felcn')->nullable();
            $table->string('r_police')->nullable();
            $table->text('content_inside');
            $table->text('observation');
            $table->text('image')->nullable();
            $table->date('date_delivered')->nullable();
            $table->string('hour_delivered')->nullable();
            $table->string('person_delivered')->nullable();
            $table->string('ci_delivered')->nullable();
            $table->text('observation_delivered')->nullable();
            $table->string('r_supervisor_delivered')->nullable();
            $table->string('r_felcn_delivered')->nullable();
            $table->string('r_police_delivered')->nullable();
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
        Schema::dropIfExists('lost_things');
    }
}
