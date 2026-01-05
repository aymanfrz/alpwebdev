<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SpeakerProfile;

class SpeakerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SpeakerProfile::create([
            'name' => 'Budi Santoso',
            'occupation' => 'Software Engineer',
            'bio' => 'Praktisi IT dan pengajar',
        ]);
    }
}
