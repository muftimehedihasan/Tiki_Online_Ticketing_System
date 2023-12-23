<?php

namespace Database\Seeders;

use App\Models\Trip;
use Faker\Factory as Faker;
use App\Models\Seat_Allocation;
use App\Models\Passenger;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;


class SeatAllocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run()
     {
         $faker = Faker::create();

         // Fetch existing Trip and Passenger IDs
         $trips = Trip::all();
         $passengers = Passenger::all();

         // Create 50 fake seat allocations with valid data
         for ($i = 0; $i < 50; $i++) {
             Seat_Allocation::create([
                 'trip_id' => $faker->randomElement($trips->pluck('id')->toArray()),
                 'passenger_id' => $faker->randomElement($passengers->pluck('id')->toArray()),
                 // Assuming a separate 'seats' table with IDs
                 'seat_id' => $faker->numberBetween(1, 36), // Adjust seat count as needed
                 'status' => $faker->randomElement(['booked', 'available'])
             ]);
         }
     }
}
