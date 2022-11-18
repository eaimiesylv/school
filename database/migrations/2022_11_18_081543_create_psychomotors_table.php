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
        Schema::create('psychomotors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->tinyInteger('verbal')->nullable();
            $table->tinyInteger('sports')->nullable();
            $table->tinyInteger('tools')->nullable();
            $table->tinyInteger('drawing')->nullable();
            $table->tinyInteger('music')->nullable();
            $table->string('acaclass',50)->nullable();
            $table->unsignedBIgInteger('added_by');
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
        Schema::dropIfExists('psychomotors');
    }
};
