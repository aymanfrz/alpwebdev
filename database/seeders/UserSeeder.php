<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@kampus.com',
            'password' => Hash::make('admin123'),
            'role_id' => 1,
            'department_id' => 1,
        ]);

        User::create([
            'name' => 'Damian',
            'email' => 'student@kampus.com',
            'password' => Hash::make('student123'),
            'role_id' => 2,
            'department_id' => 2,
        ]);
    }
}
