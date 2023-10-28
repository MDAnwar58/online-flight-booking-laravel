<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FlightType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FlightTypeController extends Controller
{
    function index()
    {
        $flight_types = FlightType::latest()->get();
        return view('pages.backend.flight_type.index', compact('flight_types'));
    }
    function create(Request $request)
    {
        $slug = $this->generateSlug($request->name);
        $flight_type = new FlightType();
        $flight_type->name = $request->name;
        $flight_type->slug = $slug;
        $flight_type->save();

        return redirect()->route('admin.flight.type')->with('success', 'Flight Type Info Created!');
    }
    public function generateSlug($name)
    {
        $flight_type = FlightType::where('name', $name)->get();
        if ($flight_type->count() > 0) {
            $count = $flight_type->count();
            $slug = Str::slug($name) . '-' . $count;
        } else {
            $slug = Str::slug($name);
        }
        return $slug;
    }
    function edit($id)
    {
        $flight_type = FlightType::findOrFail(intval($id));

        return view('pages.backend.flight_type.edit', compact('flight_type'));
    }
    function update(Request $request, $id)
    {
        $flight_type = FlightType::findOrFail(intval($id));
        if ($flight_type->name != $request->name) {
            $slug = $this->generateSlug($request->name);
        } else {
            $slug = $flight_type->slug;
        }
        $flight_type->name = $request->name;
        $flight_type->slug = $slug;
        $flight_type->update();

        return redirect()->route('admin.flight.type')->with('success', 'Flight Type Info Updated!');
    }
    function destroy($id)
    {
        $flight_type = FlightType::findOrFail(intval($id));
        $flight_type->delete();

        return redirect()->route('admin.flight.type')->with('success', 'Flight Type Info Deleted!');
    }
}
