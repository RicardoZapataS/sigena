<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgeBaseDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledge_base_data', function (Blueprint $table) {
            $table->id();
            $table->string('team');
            $table->date('date_event');
            $table->string('time_event');
            $table->string('type_fail');
            $table->date('date_attention');
            $table->string('time_attention');
            $table->string('time_rehabilitation');
            $table->text('performed_action');
            $table->string('replaced')->nullable();
            $table->text('notam')->nullable();
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
        Schema::dropIfExists('knowledge_base_data');
    }
}
