<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('restaurants')->insert([
            ['name' => 'The Khmer Kitchen', 'address' => '123 Sisowath Quay, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'River View Café', 'address' => '45 Riverside St, Kampot', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spice of Life', 'address' => '89 Central Market Rd, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Taste of Tradition', 'address' => '7 Old Market Lane, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Golden Lotus Restaurant', 'address' => '56 National Road 6, Battambang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Royal Palace Bistro', 'address' => '1 Royal Palace St, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sunset Grill', 'address' => '22 Sunset Blvd, Sihanoukville', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lotus Blossom Café', 'address' => '34 Lotus Rd, Kampong Cham', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Heritage House Restaurant', 'address' => '18 Heritage St, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cambodian Delight', 'address' => '77 Freedom Ave, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Angkor Flavors', 'address' => '99 Angkor St, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bamboo Bistro', 'address' => '12 Bamboo Lane, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khmer Spice House', 'address' => '44 Spice Rd, Battambang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Saffron & Sage', 'address' => '88 Saffron St, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lotus Leaf Café', 'address' => '15 Lotus Leaf Ave, Kampot', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Elephant Bar & Grill', 'address' => '5 Elephant St, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mekong River Restaurant', 'address' => '101 Mekong Rd, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Golden Elephant Eatery', 'address' => '33 Elephant Blvd, Battambang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Serenity Café', 'address' => '27 Serenity Lane, Kampong Thom', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Harmony Kitchen', 'address' => '58 Harmony St, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lotus Garden Restaurant', 'address' => '64 Garden Rd, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khmer Heritage Bistro', 'address' => '19 Heritage Blvd, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Taste of Angkor', 'address' => '3 Angkor Way, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cambodian Oasis', 'address' => '41 Oasis Rd, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Royal Khmer Cuisine', 'address' => '77 Royal St, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lotus Blossom Bistro', 'address' => '90 Blossom Ave, Kampot', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Golden Lotus Eatery', 'address' => '36 Lotus St, Battambang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khmer Fusion Café', 'address' => '22 Fusion Rd, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mekong Breeze Restaurant', 'address' => '48 Breeze Lane, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Serene Lotus Café', 'address' => '59 Serene Rd, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spice Route Bistro', 'address' => '31 Spice Route St, Kampong Cham', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Heritage Spice House', 'address' => '85 Heritage Rd, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khmer Essence Restaurant', 'address' => '50 Essence Blvd, Battambang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lotus Leaf Eatery', 'address' => '28 Lotus Leaf Lane, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Golden River Café', 'address' => '11 River Rd, Kampot', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cambodian Harmony Bistro', 'address' => '42 Harmony St, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Angkor Heritage Café', 'address' => '74 Angkor Blvd, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bamboo Lotus Restaurant', 'address' => '23 Bamboo Rd, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khmer Delight Bistro', 'address' => '37 Delight Ave, Battambang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Saffron Lotus Eatery', 'address' => '14 Saffron St, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Elephant Spice House', 'address' => '66 Elephant Rd, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mekong Essence Restaurant', 'address' => '9 Mekong Ave, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Golden Harmony Café', 'address' => '53 Harmony Lane, Battambang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Serenity Spice Bistro', 'address' => '17 Serenity St, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lotus Garden Eatery', 'address' => '62 Garden Rd, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khmer Heritage Eatery', 'address' => '20 Heritage Blvd, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Taste of Serenity', 'address' => '5 Serenity Rd, Kampong Cham', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cambodian Essence Bistro', 'address' => '49 Essence St, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Royal Lotus Café', 'address' => '72 Royal St, Phnom Penh', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Angkor Breeze Restaurant', 'address' => '6 Breeze Blvd, Siem Reap', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
