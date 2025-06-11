<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProvinceSeeder::class,
            RestaurantSeeder::class,
            ProvinceRestaurantSeeder::class,
            DestinationSeeder::class,
            ProvinceDestinationSeeder::class,
            EventSeeder::class,
            EventDestinationSeeder::class,
        ]);
    }
}
