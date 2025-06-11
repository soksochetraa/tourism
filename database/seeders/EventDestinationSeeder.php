<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventDestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_destination')->insert([
            // Khmer New Year linked to Siem Reap (assume destination_id = 2)
            ['event_id' => 1, 'destination_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Bon Om Touk linked to Phnom Penh Royal Palace (destination_id = 1)
            ['event_id' => 2, 'destination_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Angkor Festival linked to Angkor Wat (destination_id = 1)
            ['event_id' => 3, 'destination_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Pchum Ben linked to Tonle Sap Lake (destination_id = 4)
            ['event_id' => 4, 'destination_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Khmer New Year also linked to Tonle Sap Lake (destination_id = 4)
            ['event_id' => 1, 'destination_id' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
