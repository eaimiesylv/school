<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classteachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('session_id');
            $table->unsignedBigInteger('clas_id');
            $table->unsignedBigInteger('arm_id')->nullable();
            $table->unsignedBIgInteger('added_by');
           
         
            $table->index('session_id');
            $table->index('teacher_id');
            $table->index('clas_id');
            $table->index('arm_id');
           
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
        Schema::dropIfExists('classteachers');
    }
};
