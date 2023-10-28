<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyBookingController extends Controller
{
    function myBooking()
    {
        return view('pages.frontend.my_booking.index');
    }
}
