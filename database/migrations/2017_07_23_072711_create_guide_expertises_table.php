<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuideExpertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_expertise', function (Blueprint $table) {
            $table->increments('guide_expertise_id');
            $table->string('guide_id');
            $table->string('religion_tour');
            $table->string('families');
            $table->string('xtream');
            $table->string('arch');
            $table->string('art');
            $table->string('camping');
            $table->string('lecturer');
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
        Schema::dropIfExists('guide_expertise');
    }
}
