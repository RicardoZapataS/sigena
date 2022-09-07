<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtc04sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atc04s', function (Blueprint $table) {
            $table->id();
            $table->string('tuition', 8);
            $table->string('type', 8);
            $table->string('company', 25);
            $table->string('fly', 8);
            $table->string('route', 8);
            $table->string('departure', 8);
            $table->string('departure_hour', 5);
            $table->string('arrival', 8);
            $table->string('arrival_hour', 5);
            $table->string('observation');
            $table->string('cc', 1);
            $table->string('er', 1);
            $table->string('bk', 1);
            $table->string('airstrip', 8);
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
        Schema::dropIfExists('atc04s');
    }
}
