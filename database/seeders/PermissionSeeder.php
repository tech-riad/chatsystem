<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'dashboard.view',

            'user.view',
            'user.create',
            'user.edit',
            'user.delete',

            'group.view',
            'group.create',
            'group.edit',
            'group.delete',

            'chat.view',
            'chat.send',
            'chat.delete',

            'role.view',
            'role.create',
            'role.edit',
            'role.delete',

            'permission.view',
            'permission.create',
            'permission.edit',
            'permission.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }
    }
}
