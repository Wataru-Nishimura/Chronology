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
        Schema::create('citations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('citation_title', 50);
            $table->string('citation_detail', 400);
            $table->string('start_date', 50);
            $table->string('website_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citations');
    }
};
