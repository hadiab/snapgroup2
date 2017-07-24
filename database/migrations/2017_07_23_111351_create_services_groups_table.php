<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('services_groups', function (Blueprint $table) {
            $table->string('group_id');
            $table->string('flight_id');
            $table->string('place_id');
            $table->string('guide_id');
            $table->string('member_id');
            $table->string('hotel_id');
            $table->string('restaurant_id');
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
         Schema::dropIfExists('services_groups');
    }
}
