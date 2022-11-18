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
        Schema::create('allhmcomments', function (Blueprint $table) {
            $table->id();
            $table->string('hcomment');
            $table->string('hcriteria');
            $table->tinyInteger('added_by');
            $table->boolean('third_term')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allhmcomments');
    }
};
