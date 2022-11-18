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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('surname',100);
            $table->string('middlename',100);
            $table->string('firstname',100);
            $table->string('role',10)->default('student');
            $table->string('sex',5);
            $table->string('regno')->nullable();
            $table->boolean('status')->default(true);
            $table->string('uuid');
            $table->string('passport')->nullable();
            $table->unsignedBigInteger('session_id');
            $table->unsignedBigInteger('clas_id')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
