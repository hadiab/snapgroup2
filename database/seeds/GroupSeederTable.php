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
        DB::table('groups')->truncate();

        $members = factory(App\Group::class, 10)->create();
    }
}
