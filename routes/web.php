<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SeatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//rote for location
Route::get('/location', [LocationController::class, 'index'])->name('location');

// Route for tiket form
Route::get('/ticket', [BookingController::class, 'ticket'])->name('ticket');

// Rote for trips
Route::get('/trips', [BookingController::class, 'trips'])->name('trips');

// Rote for passengers
Route::get('/passengers', [BookingController::class, 'passengers'])->name('passengers');

// Rote for seats
Route::get('/seats', [SeatController::class, 'seats'])->name('seats');

// Rote for seat allocation
Route::get('/seatAllocation', [BookingController::class, 'seatAllocation'])->name('seatAllocation');

