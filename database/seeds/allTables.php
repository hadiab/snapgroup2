<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class allTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'profile_image' =>str_random(10),
            'password' => bcrypt('secret')
        ]);
    

        DB::table('groups')->insert([
            'origin' => str_random(10),
            'destination' => str_random(10),
            'group_title' => str_random(10),
            'group_desc' => str_random(10),
            'group_image' => str_random(10),
            'start_date' => Carbon::now(),
            'end_date' => Carbon::tomorrow()
        ]);


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

           