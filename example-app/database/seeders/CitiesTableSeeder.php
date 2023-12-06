<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('cities')->insert([
        ['city' => 'Riyadh', 'description' => "Saudi Arabia's vibrant capital, where ancient heritage meets modern luxury, with a rich history, impressive architecture, and cultural diversity."],
        ['city' => 'Jeddah', 'description' => "Jeddah, Saudi Arabia's coastal gem, blends tradition with modernity. Its Red Sea views, historic districts, and vibrant culture make it a dynamic destination."],
        // Add as many cities as you need
        ]);

    }
}
