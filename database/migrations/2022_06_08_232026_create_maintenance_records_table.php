<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_records', function (Blueprint $table) {
            $table->id();
            $table->date('date_maintenance');
            $table->string('turn');
            $table->string('activity_name');
            $table->string('activity_ident');
            $table->string('business');
            $table->text('description');
            $table->text('observation')->nullable();
            $table->boolean('alarm')->default(0);
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
        Schema::dropIfExists('maintenance_records');
    }
}
