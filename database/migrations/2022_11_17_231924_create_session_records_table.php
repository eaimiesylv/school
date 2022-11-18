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
        Schema::create('session_records', function (Blueprint $table) {
            $table->id();
          
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('session_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('clas_id');
            $table->unsignedBigInteger('arm_id')->nullable();
            $table->unsignedBigInteger('added_by');
            
            $table->index('session_id');
            $table->index('clas_id');
    
            $table->index('user_id');

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
        Schema::dropIfExists('session_records');
    }
};
