<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); 

        DB::table('members')->truncate();
        
        $members = factory(App\Member::class, 10)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); 
    }
}
