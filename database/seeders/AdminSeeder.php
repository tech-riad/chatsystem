<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Super Admin
        $super = User::firstOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'unique_id' => strtoupper(uniqid('USR')),
                'name' => 'Super Admin',
                'password' => Hash::make('12345678'),
                'status' => true,
            ]
        );
        $super->assignRole('Super Admin');

        // Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'unique_id' => strtoupper(uniqid('USR')),
                'name' => 'Admin',
                'password' => Hash::make('12345678'),
                'status' => true,
            ]
        );
        $admin->assignRole('Admin');

        // Regular User
        $user = User::firstOrCreate(
            ['email' => 'user@example.com'],
            [
                'unique_id' => strtoupper(uniqid('USR')),
                'name' => 'User',
                'password' => Hash::make('12345678'),
                'status' => true,
            ]
        );
        $user->assignRole('User');
        // Regular User
        $user = User::firstOrCreate(
            ['email' => 'user1@example.com'],
            [
                'unique_id' => strtoupper(uniqid('USR')),
                'name' => 'User1',
                'password' => Hash::make('12345678'),
                'status' => true,
            ]
        );
        $user->assignRole('User');
        // Regular User
        $user = User::firstOrCreate(
            ['email' => 'user2@example.com'],
            [
                'unique_id' => strtoupper(uniqid('USR')),
                'name' => 'User2',
                'password' => Hash::make('12345678'),
                'status' => true,
            ]
        );
        $user->assignRole('User');
        // Regular User
        $user = User::firstOrCreate(
            ['email' => 'user3@example.com'],
            [
                'unique_id' => strtoupper(uniqid('USR')),
                'name' => 'User3',
                'password' => Hash::make('12345678'),
                'status' => true,
            ]
        );
        $user->assignRole('User');
        // Regular User
        $user = User::firstOrCreate(
            ['email' => 'user4@example.com'],
            [
                'unique_id' => strtoupper(uniqid('USR')),
                'name' => 'User4',
                'password' => Hash::make('12345678'),
                'status' => true,
            ]
        );
        $user->assignRole('User');
    }
}
