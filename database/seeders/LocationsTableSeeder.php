<?php

namespace Database\Seeders;

use App\Models\Location;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create 10 fake locations
        for ($i = 0; $i < 10; $i++) {
            Location::create([
                'name' => $faker->city,
            ]);
        }
    }
}
