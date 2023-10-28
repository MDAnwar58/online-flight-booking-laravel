<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Flight;
use App\Models\FlightType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FlightController extends Controller
{
    function index()
    {
        $flights = Flight::latest()->get();
        return view('pages.backend.flight.index', compact('flights'));
    }
    function create(Request $request)
    {
        $airlines = Airline::latest()->get();
        $airports = Airport::latest()->get();
        $flight_types = FlightType::latest()->get();
        return view('pages.backend.flight.create', compact('airlines', 'airports', 'flight_types'));
    }
    function store(Request $request)
    {
        $slug = $this->generateSlug($request->flight_number);
        $flight = new Flight();
        $flight->airline_id = $request->airline_id;
        $flight->flight_type_id = $request->flight_type_id;
        $flight->flight_number = $request->flight_number;
        $flight->slug = $slug;
        $flight->plane_on = $request->plane_on;
        $flight->departure_location_id = $request->departure_location_id;
        $flight->arrival_location_id = $request->arrival_location_id;
        $flight->departure_date = $request->departure_date;
        $flight->arrival_date = $request->arrival_date;
        $flight->departure_time = $request->departure_time;
        $flight->arrival_time = $request->arrival_time;
        $flight->flight_status = $request->flight_status;
        $flight->duration = $request->duration;
        $flight->seats = $request->seats;
        $flight->price = $request->price;
        $flight->save();

        return redirect()->route('admin.flight')->with('success', 'Flight Info Created!');
    }
    public function generateSlug($flight_number)
    {
        $flight = Flight::where('flight_number', $flight_number)->get();
        if ($flight->count() > 0) {
            $count = $flight->count();
            $slug = Str::slug($flight_number) . '-' . $count;
        } else {
            $slug = Str::slug($flight_number);
        }
        return $slug;
    }
    function edit($id)
    {
        $flight = Flight::findOrFail(intval($id));
        $airlines = Airline::latest()->get();
        $airports = Airport::latest()->get();
        $arrival_airports = Airport::latest()->get();
        $flight_types = FlightType::latest()->get();

        return view('pages.backend.flight.edit', compact('flight', 'airlines', 'arrival_airports', 'airports', 'flight_types'));
    }
    function update(Request $request, $id)
    {
        $flight = Flight::findOrFail(intval($id));
        if ($flight->name != $request->name) {
            $slug = $this->generateSlug($request->name);
        } else {
            $slug = $flight->slug;
        }
        $flight->airline_id = $request->airline_id;
        $flight->flight_type_id = $request->flight_type_id;
        $flight->flight_number = $request->flight_number;
        $flight->slug = $slug;
        $flight->plane_on = $request->plane_on;
        $flight->departure_location_id = $request->departure_location_id;
        $flight->arrival_location_id = $request->arrival_location_id;
        $flight->departure_date = $request->departure_date;
        $flight->arrival_date = $request->arrival_date;
        $flight->departure_time = $request->departure_time;
        $flight->arrival_time = $request->arrival_time;
        $flight->flight_status = $request->flight_status;
        $flight->duration = $request->duration;
        $flight->seats = $request->seats;
        $flight->price = $request->price;
        $flight->update();

        return redirect()->route('admin.flight')->with('success', 'Flight Info Updated!');
    }
    function destroy($id)
    {
        $flight = Flight::findOrFail(intval($id));
        $flight->delete();

        return redirect()->route('admin.flight')->with('success', 'Flight Type Info Deleted!');
    }
}
