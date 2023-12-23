<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // function for ticket and seat booking
    public function ticket(){

        return view('booking.ticket');
    }
}
