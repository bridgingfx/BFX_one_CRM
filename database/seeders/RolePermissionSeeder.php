<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Permissions
        $permissions = ['create user', 'edit user', 'delete user', 'view user'];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Roles
        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $user = Role::firstOrCreate(['name' => 'User']);

        // Assign permissions
        $admin->givePermissionTo(Permission::all());
        $user->givePermissionTo(['view user']);
    }
}
