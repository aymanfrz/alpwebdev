<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::insert([
            ['name' => 'Informatika'],
            ['name' => 'Manajemen'],
            ['name' => 'Akuntansi'],
            ['name' => 'Desain Komunikasi Visual'],
            ['name' => 'Hukum'],
            ['name' => 'Psikologi'],
            ['name' => 'Sastra Inggris'],
            ['name' => 'Kedokteran'],
        ]);
    }
}
