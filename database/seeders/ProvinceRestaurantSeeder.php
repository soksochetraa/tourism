<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceRestaurantSeeder extends Seeder
{
    public function run(): void
    {
        $provinceCount = 25;

        $restaurantCount = 50;

        $data = [];
        for ($restaurantId = 1; $restaurantId <= $restaurantCount; $restaurantId++) {
            $provinceId = ($restaurantId % $provinceCount) + 1;

            $data[] = [
                'province_id' => $provinceId,
                'restaurant_id' => $restaurantId,
            ];
        }

        DB::table('province_restaurants')->insert($data);
    }
}
