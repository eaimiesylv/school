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
        Schema::create('affectives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBIgInteger('user_id');
            $table->tinyInteger('punctuality')->nullable();
            $table->tinyInteger('neat')->nullable();
            $table->tinyInteger('behaviour')->nullable();
            $table->tinyInteger('lead')->nullable();
            $table->tinyInteger('help')->nullable();
            $table->tinyInteger('emotion')->nullable();
            $table->tinyInteger('health')->nullable();
            $table->tinyInteger('attitude')->nullable();
            $table->tinyInteger('attentive')->nullable();
            $table->tinyInteger('spoken')->nullable();
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
        Schema::dropIfExists('affectives');
    }
};
