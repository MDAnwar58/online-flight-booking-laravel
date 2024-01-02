<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FlightBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyBookingController extends Controller
{
    function myBooking()
    {
        $user = Auth::user();
        $bookingFlights = FlightBooking::where('user_id', $user->id)->get();
        return view('pages.frontend.my_booking.index', compact('bookingFlights'));
    }
}
