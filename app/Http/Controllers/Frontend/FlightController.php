<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    function index(Request $request)
    {
        // return $request->all();
        if ($request->flight == "round_trip") {
            $depart_flights = Flight::where('departure_location_id', $request->departure_location_id)
            ->where('arrival_location_id', $request->arrival_location_id)
            ->where('departure_date', $request->departure_date)
            ->where('seats', '>', $request->seats)
            ->latest()
            ->get();

            $return_date = $request->arrival_date;

            $airlines = Airline::all();
            return view('pages.frontend.flight.index', compact('depart_flights', 'return_date', 'airlines'));
        } elseif ($request->flight == "one_way") {
            $depart_flights = Flight::where('departure_location_id', $request->departure_location_id)
            ->where('arrival_location_id', $request->arrival_location_id)
            ->where('departure_date', $request->departure_date)
            ->where('seats', '>', $request->seats)
            ->latest()
            ->get();
            $return_date = "";
            $airlines = Airline::all();
            return view('pages.frontend.flight.index', compact('depart_flights', 'return_date', 'airlines'));
        } elseif ($request->price) {
            $depart_flights = Flight::where('price', '<', $request->price)->latest()->get();
            $return_date = "";
            $airlines = Airline::all();
            return view('pages.frontend.flight.index', compact('depart_flights', 'return_date', 'airlines'));
        } else {
            $depart_flights = Flight::latest()->get();
            $return_date = "";
            $airlines = Airline::all();
            return view('pages.frontend.flight.index', compact('depart_flights', 'return_date', 'airlines'));
        }
    }
}
