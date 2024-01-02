<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    function index(Request $request)
    {
        // $flights = Flight::where('departure_location_id', '=', $departureLocation->id)->get();
        // return $depart_flights;
        if ($request->flight == "round_trip") {
            $departure_location = $request->departure_location[0];
            $arrival_location = $request->arrival_location[0];
            if ($departure_location != null && $arrival_location != null) {
                $departureLocation = Airport::where('name', 'like', '%' . $departure_location . '%')->first();
                $arrivalLocation = Airport::where('name', 'like', '%' . $arrival_location . '%')->first();
                if ($request->departure_date[0] != null && $request->seats != null) {
                    $depart_flights = Flight::where('departure_location_id', '=', $departureLocation->id)
                        ->where('arrival_location_id', '=', $arrivalLocation->id)
                        ->where('departure_date', $request->departure_date[0])
                        ->where('seats', '>', $request->seats)
                        ->latest()
                        ->get();
                } else {
                    $depart_flights = "false";
                }
            } else {
                $depart_flights = "false";
            }


            $return_date = $request->arrival_date;
            $airlines = Airline::all();
            $person = $request->seats;
            return view('pages.frontend.flight.index', compact('depart_flights', 'return_date', 'airlines', 'person'));
        } elseif ($request->flight == "one_way") {
            $departure_location = $request->departure_location[0];
            $arrival_location = $request->arrival_location[0];
            if ($departure_location != null && $arrival_location != null) {
                $departureLocation = Airport::where('name', 'like', '%' . $departure_location . '%')->first();
                $arrivalLocation = Airport::where('name', 'like', '%' . $arrival_location . '%')->first();
                if ($request->departure_date[0] != null && $request->seats != null) {
                    $depart_flights = Flight::where('departure_location_id', '=', $departureLocation->id)
                        ->where('arrival_location_id', '=', $arrivalLocation->id)
                        ->where('departure_date', $request->departure_date[0])
                        ->where('seats', '>', $request->seats)
                        ->latest()
                        ->get();
                } else {
                    $depart_flights = "false";
                }
            } else {
                $depart_flights = "false";
            }

            $return_date = "";
            $airlines = Airline::all();
            $person = $request->seats;
            return view('pages.frontend.flight.index', compact('depart_flights', 'return_date', 'airlines', 'person'));
        } elseif ($request->flight == "multi_city") {
            // departure location
            $departureLocation0 = Airport::where('name', 'like', '%' . $request->departure_location[0] . '%')->first();
            $departureLocation1 = Airport::where('name', 'like', '%' . $request->departure_location[1] . '%')->first();
            // departure date
            $departure_date0 = $request->departure_date[0];
            $departure_date1 = $request->departure_date[1];
            // arrival location
            $arrivalLocation0 = Airport::where('name', 'like', '%' . $request->arrival_location[0] . '%')->first();
            $arrivalLocation1 = Airport::where('name', 'like', '%' . $request->arrival_location[1] . '%')->first();
            // return ;
            $depart_flights = Flight::where('departure_location_id', '=', $departureLocation0->id)
                        ->where('arrival_location_id', '=', $arrivalLocation0->id)
                        ->where('departure_date', $departure_date0)
                        ->where('seats', '>', $request->seats)
                        ->latest()
                        ->get();
            // $depart_1_flights = Flight::where('departure_location_id', '=', $departureLocation1->id)
            //             ->where('arrival_location_id', '=', $arrivalLocation1->id)
            //             ->where('departure_date', '=', $departure_date1)
            //             ->where('seats', '>', $request->seats)
            //             ->latest()
            //             ->get();
            // return $depart_flights;
            return $request->all();
            $seats = $request->seats;
            return view('pages.frontend.flight.index', compact('depart_flights', 'return_date', 'airlines', 'person'));
        } elseif ($request->price) {
            $depart_flights = Flight::where('price', '<', $request->price)->latest()->get();
            $return_date = "";
            $airlines = Airline::all();
            $person = $request->seats;
            return view('pages.frontend.flight.index', compact('depart_flights', 'return_date', 'airlines', 'person'));
        } else {
            $depart_flights = Flight::latest()->get();
            $return_date = "";
            $airlines = Airline::all();
            $person = $request->seats;
            return view('pages.frontend.flight.index', compact('depart_flights', 'return_date', 'airlines', 'person'));
        }
    }
}
