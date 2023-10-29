<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\SelectFLight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlightBookingController extends Controller
{
    function flightBooking(Request $request)
    {
        $user_id = Auth::user()->id;
        $flight_id = "["."'".$request->flight_id[0]."'". ",". "'".$request->flight_id[1]."'"."]";
        $selectFlight = new SelectFLight();
        $selectFlight->user_id = $user_id;
        $selectFlight->flight_id = $flight_id;
        $selectFlight->save();
        // $flight0 = Flight::where('id', $request->flight_id[0])->first();
        // $flight1 = Flight::where('id', $request->flight_id[1])->first();
        return view('pages.frontend.booking.index', compact('selectFlight'));
    }
}
