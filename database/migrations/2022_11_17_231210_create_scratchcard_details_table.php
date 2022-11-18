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
        Schema::create('scratchcard_details', function (Blueprint $table) {
            $table->id();

            $table->string('cardno');
            $table->string('serialno');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->tinyInteger('count')->nullable();
            $table->tinyInteger('climit')->nullable();
            $table->tinyInteger('lockstate')->nullable();
            $table->unsignedBigInteger('session_id');
            $table->unsignedBigInteger('clas_id')->nullable();
            $table->unsignedBIgInteger('added_by');
            $table->timestamps();

            $table->index('session_id');
            $table->index('clas_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scratchcard_details');
    }
};
