<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seat__allocations', function (Blueprint $table) {
            $table->id();
            // relotionship with trip
            $table->foreignId('trip_id')->constrained('trips')->onDelete('cascade');
            // relotionship with passenger
            $table->foreignId('passenger_id')->constrained('passengers')->onDelete('cascade');
            // relotionship with seat
            $table->foreignId('seat_id')->constrained('seats')->onDelete('cascade');
            // status (booked, available)
            $table->string('status', 20); // Adjust the length as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat__allocations');
    }
};
