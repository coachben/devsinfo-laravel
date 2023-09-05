<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create some roles.
        $superadmin_role = Role::create(['name' => 'super admin']);
        $developer_role = Role::create(['name' => 'developer']);
        $company_role = Role::create(['name' => 'company']);

        // $user->givePermissionTo('edit users');
        // $user->assignRole('writer');
        // $role->givePermissionTo('edit users');

        //create some permissions. We shall prepopulate them for users
        $manage_users = Permission::create(['name' => 'manage users']);
        $view_users = Permission::create(['name' => 'view users']);
        $manage_roles = Permission::create(['name' => 'manage roles']);
        $manage_permissions = Permission::create(['name' => 'manage permissions']);

        //prepare for sync
        $super_permissions = [$manage_users,$view_users,$manage_permissions];
        $dev_permissions = [$view_users];
        $company_permissions = [$view_users,$manage_users,$manage_roles];

        // $permission->assignRole($adminRole);
        // $permission->syncRoles($roles);
        // Multiple permissions can be synced to a role using either of these methods:
        $superadmin_role->syncPermissions($super_permissions);
        $developer_role->syncPermissions($dev_permissions);
        $company_role->syncPermissions($company_permissions);

        //Some users. can create more users as superadmin
        $user1 = User::factory()->create([
            'name' => 'Gringos',
            'email' => 'super@lara.com',
            'password' => '12345'
        ]);
        $user1->assignRole($superadmin_role);

        $user2 = User::factory()->create([
            'name' => Str::random(7),
            'email' => 'dev@lara.com',
            'password' => '12345'
        ]);
        $user2->assignRole($developer_role);

        $user3 = User::factory()->create([
            'name' => Str::random(7),
            'email' => 'ben@lara.com',
            'password' => '12345'
        ]);
        $user3->assignRole($company_role);

    }
}
