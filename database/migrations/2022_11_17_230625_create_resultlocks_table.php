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
        Schema::create('resultlocks', function (Blueprint $table) {
             $table->id();
            $table->boolean('lock')->default(false);
           $table->unsignedBigInteger('session_id');
           $table->unsignedBIgInteger('added_by');
            $table->timestamps();

            $table->index('session_id');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultlocks');
    }
};
