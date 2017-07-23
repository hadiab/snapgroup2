<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_guides', function (Blueprint $table) {
            $table->increments('guide_id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('license_num');
            $table->int('age');
            $table->string('website');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('google_plus');
            $table->string('instagram');
            $table->string('pinterest');
            $table->text('tos');
            $table->string('country');
            $table->int('zip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_guides');
    }
}
