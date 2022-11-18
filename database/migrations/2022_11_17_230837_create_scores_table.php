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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
             $table->tinyInteger('score');
            $table->unsignedBigInteger('assessment_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('clas_id');
            $table->unsignedBigInteger('session_id');
            $table->string('unique_std_score')->unique();
            $table->unsignedBIgInteger('added_by');

            $table->index('unique_std_score');
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
        Schema::dropIfExists('scores');
    }
};
