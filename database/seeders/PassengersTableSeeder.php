<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PassengersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create 20 fake passengers
        for ($i = 0; $i < 20; $i++) {
            \App\Models\Passenger::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail, // Ensure unique emails
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // Use a hashed password for security
                'phone' => $faker->phoneNumber,
                'address' => $faker->streetAddress,
            ]);
        }
    }


    }

