<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\BankAccount;
use App\Models\User;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Business Case Competition',
            'description' => 'Kompetisi internasional untuk mahasiswa.',
            'start_date' => '2024-03-20',
            'start_time' => '09:00:00',
            'location' => 'Gedung Serbaguna',
            'speaker_name' => null,
            'price' => 50000,
            'is_featured' => true,
            'bank_account_id' => 1,
            'event_category_id' => 3,
            'user_id' => 1,
        ]);


        Event::create([
            'title' => 'Musical theory Webinar',
            'description' => 'Pemberian teori musik untuk mahasiswa.',
            'start_date' => '2024-03-20',
            'start_time' => '09:00:00',
            'location' => 'Zoom',
            'speaker_name' => 'John Doe',
            'price' => 0,
            'is_featured' => true,
            'bank_account_id' => 1,
            'event_category_id' => 4,
            'user_id' => 1,
        ]);

        Event::create([
            'title' => 'Painting Workshop',
            'description' => 'Workshop painting untuk mahasiswa.',
            'start_date' => '2024-03-20',
            'start_time' => '09:00:00',
            'location' => 'Gedung Serbaguna',
            'speaker_name' => null,
            'price' => 50000,
            'is_featured' => false,
            'bank_account_id' => 1,
            'event_category_id' => 2,
            'user_id' => 1,
        ]);
    }
}
