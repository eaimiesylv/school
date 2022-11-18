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
        Schema::create('arms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clas_id');
            $table->string('armname',20);
            $table->unsignedBIgInteger('added_by');
            $table->timestamps();

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
        Schema::dropIfExists('arms');
    }
};
