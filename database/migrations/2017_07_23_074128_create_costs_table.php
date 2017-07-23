<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('costs', function (Blueprint $table) {
            $table->increments('cost_id');
            $table->timestamps();
            $table->string('flight_id');
            $table->string('hotel_id');
            $table->string('transport_id');
            $table->string('place_id');
            $table->string('guide_id');
            $table->string('restaurant_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cost');
    }
}
