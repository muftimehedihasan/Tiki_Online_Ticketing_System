<?php

namespace Database\Seeders;

use App\Models\Seat;
use Faker\Factory as Faker;
// In database/seeders/SeatsTableSeeder.php
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Create 50 fake seats
        Seat::factory()->count(50)->create();
    }

}
