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
        Schema::create('teacherdetails', function (Blueprint $table) {
            $table->id();
            $table->string('marital');
			$table->date('dob');
            $table->string('phone');
            $table->string('otherphone');
            $table->string('jobsection');
            $table->string('language');
            $table->string('school');
            $table->string('discipline');
            $table->string('qualification');
            $table->string('subjects');
            $table->string('graduationyear');
            $table->string('bankname');
            $table->string('accname');
            $table->string('accno');
            $table->string('prevwork');
            $table->string('workposition');
            $table->string('workduration');
            $table->string('reason');
            $table->string('experience');
            $table->string('worklength');
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
        Schema::dropIfExists('teacherdetails');
    }
};
