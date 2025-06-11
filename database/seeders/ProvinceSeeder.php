<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert([
            ['name' => 'Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampot', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Battambang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kandal', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Preah Sihanouk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Cham', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Takeo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Banteay Meanchey', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kep', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Prey Veng', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Svay Rieng', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Speu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pursat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kratie', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mondulkiri', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ratanakiri', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stung Treng', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Oddar Meanchey', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tboung Khmum', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pailin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Preah Vihear', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sihanoukville', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Chhnang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Thom', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
