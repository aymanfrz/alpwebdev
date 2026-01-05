<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BankAccount;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BankAccount::create([
            'bank_name' => 'BCA',
            'account_number' => '1234567890',
            'account_holder' => 'Anna',
        ]);
    }
}
