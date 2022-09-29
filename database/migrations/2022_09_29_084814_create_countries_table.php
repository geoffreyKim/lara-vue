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
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('county', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('country_id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('coonstituency', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('country_id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('ward', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('country_id');
            $table->string('name');
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
        Schema::dropIfExists('countries');
        Schema::dropIfExists('county');
        Schema::dropIfExists('constituency');
        Schema::dropIfExists('ward');
    }
};
