<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            ['name' => 'Angkor Wat', 'description' => 'Famous temple complex in Siem Reap.', 'lat' => 13.4125, 'lng' => 103.8667, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phnom Penh Royal Palace', 'description' => 'Residence of the King of Cambodia.', 'lat' => 11.5621, 'lng' => 104.8885, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Rong Island', 'description' => 'Popular island with beautiful beaches.', 'lat' => 10.6189, 'lng' => 103.2015, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tonle Sap Lake', 'description' => 'Largest freshwater lake in Southeast Asia.', 'lat' => 12.5000, 'lng' => 104.0000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bokor National Park', 'description' => 'Mountain park with waterfalls and ancient buildings.', 'lat' => 10.6164, 'lng' => 104.0171, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Preah Vihear Temple', 'description' => 'Ancient Hindu temple located on a cliff.', 'lat' => 14.4175, 'lng' => 105.8372, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Battambang Bamboo Train', 'description' => 'Unique local transport on bamboo tracks.', 'lat' => 13.1011, 'lng' => 103.2041, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sihanoukville Beaches', 'description' => 'Popular beaches and islands for tourists.', 'lat' => 10.6270, 'lng' => 103.5233, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ratanakiri Waterfalls', 'description' => 'Scenic waterfalls in the northeast province.', 'lat' => 13.8500, 'lng' => 107.3200, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampot Pepper Plantations', 'description' => 'Famous for Kampot pepper production.', 'lat' => 10.6100, 'lng' => 104.1833, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Ker Temple', 'description' => 'Ancient temple complex in the jungle.', 'lat' => 13.8221, 'lng' => 104.8917, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phnom Kulen National Park', 'description' => 'Sacred mountain with waterfalls and ancient carvings.', 'lat' => 13.6500, 'lng' => 104.0833, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Phluk Floating Village', 'description' => 'Traditional stilted village on Tonle Sap Lake.', 'lat' => 13.3570, 'lng' => 104.2877, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Silver Pagoda', 'description' => 'Temple in Phnom Penh with silver-tiled floor.', 'lat' => 11.5633, 'lng' => 104.9270, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Banteay Srei Temple', 'description' => 'Known for its intricate carvings and pink sandstone.', 'lat' => 13.5670, 'lng' => 104.9908, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Tonsay (Rabbit Island)', 'description' => 'Quiet island near Kep with sandy beaches.', 'lat' => 10.5855, 'lng' => 104.2789, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Dach (Silk Island)', 'description' => 'Known for traditional silk weaving.', 'lat' => 11.6608, 'lng' => 104.9424, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phnom Penh Central Market', 'description' => 'Iconic market with a wide variety of goods.', 'lat' => 11.5614, 'lng' => 104.9260, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Cham Bamboo Bridge', 'description' => 'Unique bamboo bridge over the Mekong River.', 'lat' => 11.9600, 'lng' => 105.4700, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Preah Khan Temple', 'description' => 'Large temple complex in Angkor.', 'lat' => 13.4450, 'lng' => 104.9414, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Pich (Diamond Island)', 'description' => 'Modern island with entertainment and shopping.', 'lat' => 11.5670, 'lng' => 104.9260, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kirirom National Park', 'description' => 'Mountain park with pine forests and waterfalls.', 'lat' => 11.1100, 'lng' => 104.4000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sangke River', 'description' => 'Scenic river in Battambang with boat tours.', 'lat' => 13.0950, 'lng' => 103.1980, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Thom Ancient Bridge', 'description' => 'Historic bridge over the Stung Sen River.', 'lat' => 12.7150, 'lng' => 104.8980, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Rong Samloem Island', 'description' => 'Less developed island with pristine beaches.', 'lat' => 10.5350, 'lng' => 103.2380, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Chhnang Pottery Village', 'description' => 'Known for traditional pottery making.', 'lat' => 12.2500, 'lng' => 104.6500, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Kong Mangrove Forest', 'description' => 'Protected mangrove area with diverse wildlife.', 'lat' => 11.6170, 'lng' => 103.0400, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phnom Penh Night Market', 'description' => 'Vibrant market with food, crafts, and entertainment.', 'lat' => 11.5611, 'lng' => 104.9294, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampot Salt Fields', 'description' => 'Traditional salt production area.', 'lat' => 10.6000, 'lng' => 104.2000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Ker Temple Complex', 'description' => 'Ancient temple complex in the jungle.', 'lat' => 13.8221, 'lng' => 104.8917, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Speu Waterfalls', 'description' => 'Beautiful waterfalls in the province.', 'lat' => 11.4150, 'lng' => 104.6830, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Thonsay (Rabbit Island)', 'description' => 'Quiet island near Kep with sandy beaches.', 'lat' => 10.5855, 'lng' => 104.2789, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Dach (Silk Island)', 'description' => 'Known for traditional silk weaving.', 'lat' => 11.6608, 'lng' => 104.9424, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phnom Penh Independence Monument', 'description' => 'Monument commemorating Cambodia\'s independence.', 'lat' => 11.5633, 'lng' => 104.9170, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Banteay Chhmar Temple', 'description' => 'Remote temple complex in the northwest.', 'lat' => 13.8221, 'lng' => 103.1512, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Kong Waterfall', 'description' => 'Scenic waterfall in the Koh Kong province.', 'lat' => 11.6000, 'lng' => 103.0000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Cham Wat Nokor', 'description' => 'Ancient temple complex near Kampong Cham.', 'lat' => 11.9542, 'lng' => 105.4802, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Koh Rong Dive Sites', 'description' => 'Popular diving spots around Koh Rong Island.', 'lat' => 10.6200, 'lng' => 103.2000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phnom Penh Wat Phnom', 'description' => 'Hilltop temple and symbol of the city.', 'lat' => 11.5650, 'lng' => 104.9280, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampot River Cruise', 'description' => 'Scenic boat tours along the Kampot River.', 'lat' => 10.6000, 'lng' => 104.1833, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tonle Bati', 'description' => 'Ancient temples south of Phnom Penh.', 'lat' => 11.4333, 'lng' => 104.9500, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kampong Cham Mekong River', 'description' => 'Views and boat tours on the Mekong River.', 'lat' => 11.9600, 'lng' => 105.4700, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phnom Penh Choeung Ek Genocidal Center', 'description' => 'Memorial site for victims of the Khmer Rouge.', 'lat' => 11.4982, 'lng' => 104.9101, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
