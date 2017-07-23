<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('permissions')->truncate();

        DB::table('permissions')->insert([
            'name' => 'Create Group',
            'slug' => 'create_group',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Update Group',
            'slug' => 'update_group',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Group',
            'slug' => 'delete_group',
        ]);
    }
}
