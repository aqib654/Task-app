<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('leads')->insert([
            ['name' => 'Ali Khan', 'email' => 'ali@example.com', 'phone' => '03001234567', 'status' => 'new', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ayesha Ahmed', 'email' => 'ayesha@example.com', 'phone' => '03002345678', 'status' => 'contacted', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bilal Raza', 'email' => 'bilal@example.com', 'phone' => '03003456789', 'status' => 'qualified', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fatima Noor', 'email' => 'fatima@example.com', 'phone' => '03004567890', 'status' => 'new', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Usman Tariq', 'email' => 'usman@example.com', 'phone' => '03005678901', 'status' => 'lost', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
