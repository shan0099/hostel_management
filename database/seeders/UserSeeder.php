<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Eshan',
                'email' => 'eshan@admin.com',
                'password' => hash::make('password'),
                'role' => 1, // Admin role
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Suresh Yadav',
                'email' => 'suresh.yadav@warder.com',
                'password' => Hash::make('password'),
                'role' => 2, // Warder role
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Vikram Singh',
                'email' => 'vikram.singh@warder.com',
                'password' => Hash::make('password'),
                'role' => 2, // Warder role
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Amit Sharma',
                'email' => 'amit.sharma@student.com',
                'password' => Hash::make('password'),
                'role' => 3, // Student role
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Priya Verma',
                'email' => 'priya.verma@student.com',
                'password' => Hash::make('password'),
                'role' => 3, // Student role
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Ravi Patel',
                'email' => 'ravi.patel@student.com',
                'password' => Hash::make('password'),
                'role' => 3, // Student role
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'name' => 'Sneha Iyer',
                'email' => 'sneha.iyer@student.com',
                'password' => Hash::make('password'),
                'role' => 3, // Student role
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'name' => 'Arjun Nair',
                'email' => 'arjun.nair@student.com',
                'password' => Hash::make('password'),
                'role' => 3, // Student role
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
