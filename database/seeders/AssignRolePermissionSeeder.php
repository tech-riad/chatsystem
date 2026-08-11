<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignRolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Role::findByName('Super Admin', 'web');
        $admin = Role::findByName('Admin', 'web');
        $user = Role::findByName('User', 'web');

        $superAdmin->syncPermissions(Permission::all());

        $admin->syncPermissions([
            'dashboard.view',
            'user.view',
            'group.view',
            'group.create',
            'group.edit',
            'chat.view',
            'chat.send',
        ]);

        $user->syncPermissions([
            'chat.view',
            'chat.send',
        ]);
    }
}
