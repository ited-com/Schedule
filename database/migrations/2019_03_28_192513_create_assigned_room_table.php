<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('room_time_id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('subject_id');

            $table->foreign('room_time_id')
            ->references('id')
            ->on('room_time')
            ->onDelete('cascade');

             $table->foreign('room_id')
            ->references('id')
            ->on('room')
            ->onDelete('cascade');
            
             $table->foreign('subject_id')
            ->references('id')
            ->on('subject')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assigned_room');
    }
}
