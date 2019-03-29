<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('teacher_name');
            $table->unsignedBigInteger('teacher_time_id');
            $table->unsignedBigInteger('department_id');

            $table->foreign('teacher_time_id')
            ->references('id')
            ->on('teacher_time')
            ->onDelete('cascade');
            
             $table->foreign('department_id')
            ->references('id')
            ->on('department')
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
        Schema::dropIfExists('teacher');
    }
}
