<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Member;

class RolePermissionsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('roles')->truncate();
        DB::table('permissions')->truncate();
        DB::table('permission_role')->truncate();

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

        // Attach a permission to role id = 1
        $member_role = Role::find(1);
        $member_role->permissions()->attach(1); // Create Group
        $member_role->permissions()->attach(2); // Update Group

        // Attach user to role
        $user = Member::find(1);
        $user->roles()->attach($member_role);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); 
    }
}
