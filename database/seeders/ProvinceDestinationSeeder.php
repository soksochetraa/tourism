<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceDestinationSeeder extends Seeder
{
    public function run(): void
    {
        $provinceMap = DB::table('provinces')->pluck('id', 'name');
        $destinationMap = DB::table('destinations')->pluck('id', 'name');

        $mappings = [
            ['province' => 'Siem Reap', 'destination' => 'Angkor Wat'],
            ['province' => 'Phnom Penh', 'destination' => 'Phnom Penh Royal Palace'],
            ['province' => 'Sihanoukville', 'destination' => 'Koh Rong Island'],
            ['province' => 'Siem Reap', 'destination' => 'Tonle Sap Lake'],
            ['province' => 'Kampot', 'destination' => 'Bokor National Park'],
            ['province' => 'Preah Vihear', 'destination' => 'Preah Vihear Temple'],
            ['province' => 'Battambang', 'destination' => 'Battambang Bamboo Train'],
            ['province' => 'Sihanoukville', 'destination' => 'Sihanoukville Beaches'],
            ['province' => 'Ratanakiri', 'destination' => 'Ratanakiri Waterfalls'],
            ['province' => 'Kampot', 'destination' => 'Kampot Pepper Plantations'],
            ['province' => 'Preah Vihear', 'destination' => 'Koh Ker Temple'],
            ['province' => 'Siem Reap', 'destination' => 'Phnom Kulen National Park'],
            ['province' => 'Siem Reap', 'destination' => 'Kampong Phluk Floating Village'],
            ['province' => 'Phnom Penh', 'destination' => 'Silver Pagoda'],
            ['province' => 'Siem Reap', 'destination' => 'Banteay Srei Temple'],
            ['province' => 'Kep', 'destination' => 'Koh Tonsay (Rabbit Island)'],
            ['province' => 'Phnom Penh', 'destination' => 'Koh Dach (Silk Island)'],
            ['province' => 'Phnom Penh', 'destination' => 'Phnom Penh Central Market'],
            ['province' => 'Kampong Cham', 'destination' => 'Kampong Cham Bamboo Bridge'],
            ['province' => 'Siem Reap', 'destination' => 'Preah Khan Temple'],
            ['province' => 'Phnom Penh', 'destination' => 'Koh Pich (Diamond Island)'],
            ['province' => 'Kirirom', 'destination' => 'Kirirom National Park'],
            ['province' => 'Battambang', 'destination' => 'Sangke River'],
            ['province' => 'Kampong Thom', 'destination' => 'Kampong Thom Ancient Bridge'],
            ['province' => 'Sihanoukville', 'destination' => 'Koh Rong Samloem Island'],
            ['province' => 'Kampong Chhnang', 'destination' => 'Kampong Chhnang Pottery Village'],
            ['province' => 'Koh Kong', 'destination' => 'Koh Kong Mangrove Forest'],
            ['province' => 'Phnom Penh', 'destination' => 'Phnom Penh Night Market'],
            ['province' => 'Kampot', 'destination' => 'Kampot Salt Fields'],
            ['province' => 'Preah Vihear', 'destination' => 'Koh Ker Temple Complex'],
            ['province' => 'Kampong Speu', 'destination' => 'Kampong Speu Waterfalls'],
            ['province' => 'Kep', 'destination' => 'Koh Thonsay (Rabbit Island)'],
            ['province' => 'Phnom Penh', 'destination' => 'Phnom Penh Independence Monument'],
            ['province' => 'Banteay Meanchey', 'destination' => 'Banteay Chhmar Temple'],
            ['province' => 'Koh Kong', 'destination' => 'Koh Kong Waterfall'],
            ['province' => 'Kampong Cham', 'destination' => 'Kampong Cham Wat Nokor'],
            ['province' => 'Sihanoukville', 'destination' => 'Koh Rong Dive Sites'],
            ['province' => 'Phnom Penh', 'destination' => 'Phnom Penh Wat Phnom'],
            ['province' => 'Kampot', 'destination' => 'Kampot River Cruise'],
            ['province' => 'Takeo', 'destination' => 'Tonle Bati'],
            ['province' => 'Kampong Cham', 'destination' => 'Kampong Cham Mekong River'],
            ['province' => 'Phnom Penh', 'destination' => 'Phnom Penh Choeung Ek Genocidal Center'],
        ];

        $data = [];

        foreach ($mappings as $map) {
            if (isset($provinceMap[$map['province']]) && isset($destinationMap[$map['destination']])) {
                $data[] = [
                    'province_id' => $provinceMap[$map['province']],
                    'destination_id' => $destinationMap[$map['destination']],
                ];
            }
        }

        DB::table('province_destinations')->insert($data);
    }
}
