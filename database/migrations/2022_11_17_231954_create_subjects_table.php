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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->unsignedBigInteger('clas_id');
            $table->unsignedBigInteger('arm_id')->nullabe();
            $table->tinyInteger('orderid')->nullable();
            $table->string('shortname',20)->nullable();
            $table->unsignedBIgInteger('added_by');
            $table->timestamps();

            $table->index('clas_id');
            $table->index('arm_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
};
