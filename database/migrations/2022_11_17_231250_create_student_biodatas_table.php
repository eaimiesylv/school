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
        Schema::create('student_biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nationality');
            $table->string('state');
            $table->string('lga');
            $table->string('address');
            $table->date('dob');
            $table->string('challenge');
            $table->string('pfullname');
            $table->string('fathernumber');
            $table->string('mothernumber');
            $table->string('poccupation');
            $table->string('lastschool');
            $table->string('departurereason');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();


            $table->index('user_id');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_biodatas');
    }
};
