<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventTag;

class EventTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventTag::insert([
            ['name' => 'Teknologi'],
            ['name' => 'Gratis'],
            ['name' => 'Berbayar'],
        ]);
    }
}
