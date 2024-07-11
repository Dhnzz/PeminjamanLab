<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(2)
            ->count(2)
            ->sequence(
                [
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'password' => 'admin',
                    'role' => '0',
                ],
                [
                    'name' => 'User',
                    'email' => 'user@gmail.com',
                    'password' => 'user',
                    'role' => '1',
                ]
            )
            ->create();
    }
}
