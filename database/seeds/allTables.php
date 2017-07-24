<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class allTables extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('tour_guides')->insert([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'license_num' => 12353535,
            'age' => 40,
            'website' => 'myWebsite',
            'facebook' => 'facebook',
            'twitter' => 'twitter',
            'linkedin' => 'linkedin',
            'google_plus' => 'google_plus',
            'instagram' => 'instagram',
            'pinterest' => 'pinterst',
            'tos' => 'tos',
            'country' => 'country',
            'zip' => 12512
        ]);

        DB::table('groupables')->insert([
             'group_id' => 1,
             'groupable_id' => 1,
             'groupable_type' => 'App\TourGuide'
        ]);
    }
}

           