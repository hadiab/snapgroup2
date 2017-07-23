<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('roles')->truncate();

        DB::table('roles')->insert([
            'type' => 'Member',
            'slug' => 'member',
        ]);

        DB::table('roles')->insert([
            'type' => 'Group Leader',
            'slug' => 'group_leader',
        ]);

        DB::table('roles')->insert([
            'type' => 'Group Assistance',
            'slug' => 'group_assistance',
        ]);
    }
}
