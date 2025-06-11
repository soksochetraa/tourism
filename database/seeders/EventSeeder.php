<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'name' => 'Khmer New Year',
                'description' => 'Traditional Cambodian New Year festival celebrated in April.',
                'location' => 'Siem Reap',
                'start_date' => '2025-04-13',
                'end_date' => '2025-04-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bon Om Touk (Water Festival)',
                'description' => 'Annual water festival with boat races on the Tonle Sap River.',
                'location' => 'Phnom Penh',
                'start_date' => '2025-11-01',
                'end_date' => '2025-11-03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Angkor Festival',
                'description' => 'Cultural festival showcasing traditional arts and performances near Angkor Wat.',
                'location' => 'Siem Reap',
                'start_date' => '2025-12-10',
                'end_date' => '2025-12-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pchum Ben',
                'description' => 'Ancestor worship festival lasting 15 days.',
                'location' => 'Nationwide',
                'start_date' => '2025-09-23',
                'end_date' => '2025-10-07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
