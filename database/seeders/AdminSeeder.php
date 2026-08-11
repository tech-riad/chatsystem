<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'unique_id' => strtoupper(uniqid('USR')),
                'name' => 'Super Admin',
                'password' => Hash::make('12345678'),
                'status' => true,
            ]
        );

        $admin->assignRole('Super Admin');
    }
}
