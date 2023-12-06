<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('city_activities')->insert([
            ['city_id' => '1', 'destination' => 'Kingdom Centre', 'transportation' => 'Taxi', 'activity' => 'See the recognizable Kingdom Center Tower and take in the scenery from the Sky Bridge.'],
            ['city_id' => '1', 'destination' => 'Al-Masmak Fortress', 'transportation' => 'Public Bus', 'activity' => 'Discover the medieval stronghold and the history and culture of Riyadh.'],
            ['city_id' => '1', 'destination' => 'Diriyah', 'transportation' => 'Private Car', 'activity' => 'Explore the At-Turaif District and the UNESCO-listed Diriyah Historical Center.'],
            ['city_id' => '1', 'destination' => 'Riyadh National Zoo', 'transportation' => 'Taxi', 'activity' => 'See a range of animals, take part in family-friendly activities, and explore the zoo.'],
            ['city_id' => '1', 'destination' => 'Edge of the World', 'transportation' => 'Private Car	', 'activity' => 'Discover the breathtaking cliffs and expansive vistas at the Edge of the World.'],
            ['city_id' => '2', 'destination' => 'Corniche', 'transportation' => 'Taxi', 'activity' => 'Take a stroll by the shore and pay a visit to the Fakieh Aquarium.'],
            ['city_id' => '2', 'destination' => 'Al-Balad', 'transportation' => 'Public Bus', 'activity' => 'Discover the historical buildings, go to Al-Masmak Fortress, and Alawi Souk.'],
            ['city_id' => '2', 'destination' => 'Red Sea Mall', 'transportation' => 'Taxi', 'activity' => 'Shop for national and international brands and take part in leisure pursuits.'],
            // Add as many cities as you need
        ]);
    }
}
