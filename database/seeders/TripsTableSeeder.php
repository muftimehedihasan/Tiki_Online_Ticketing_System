<?php

namespace Database\Seeders;

use App\Models\Trip;
use Faker\Factory as Faker;
// In database/seeders/TripsTableSeeder.php
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Create 10 fake trips
        Trip::factory()->count(10)->create([
            'departure_date' => $faker->dateTimeBetween('+1 week', '+3 months'), // Vary departure dates
            'arrival_date' => $faker->dateTimeBetween('+1 week', '+6 months'),    // Vary return dates
            'price' => $faker->numberBetween(500, 2000)                       // Vary prices
        ]);
    }
}
