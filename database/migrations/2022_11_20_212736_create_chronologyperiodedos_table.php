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
        Schema::create('chronologyperiodedos', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->string('event_date', 50);
            $table->string('event_subject', 200);
            $table->string('event_detail', 1000);
            $table->string('image_path', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chronologyperiodedos');
    }
};
