<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GroupSeederTable extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('groups')->insert([
            'group_image' => 'new.png',
            'origin' => 'Israel',
            'destination' => 'Spain',
            'group_title' => 'Trip To Spain',
            'group_desc' => 'Trip to spain, we are going...',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(10),
        ]);
    }
}
