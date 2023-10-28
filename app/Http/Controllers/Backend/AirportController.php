<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AirportController extends Controller
{
    function index()
    {
        $airports = Airport::latest()->get();
        return view('pages.backend.airport.index', compact('airports'));
    }
    function create(Request $request)
    {
        $slug = $this->generateSlug($request->name);
        $airport = new Airport();
        $airport->name = $request->name;
        $airport->slug = $slug;
        $airport->short_name = $request->short_name;
        $airport->location = $request->location;
        $airport->save();

        return redirect()->route('admin.airport')->with('success', 'Airport Created!');
    }
    public function generateSlug($name)
    {
        $airport = Airport::where('name', $name)->get();
        if ($airport->count() > 0) {
            $count = $airport->count();
            $slug = Str::slug($name) . '-' . $count;
        } else {
            $slug = Str::slug($name);
        }
        return $slug;
    }
    function edit($id)
    {
        $airport = Airport::findOrFail(intval($id));

        return view('pages.backend.airport.edit', compact('airport'));
    }
    function update(Request $request, $id)
    {
        $airport = Airport::findOrFail(intval($id));
        if ($airport->name != $request->name) {
            $slug = $this->generateSlug($request->name);
        }else{
            $slug = $airport->slug;
        }

        $airport->name = $request->name;
        $airport->slug = $slug;
        $airport->short_name = $request->short_name;
        $airport->location = $request->location;
        $airport->update();

        return redirect()->route('admin.airport')->with('success', 'Airport Updated!');
    }
    function destroy($id)
    {
        $airport = Airport::findOrFail(intval($id));
        $airport->delete();

        return redirect()->route('admin.airport')->with('success', 'Airport Deleted!');
    }
}
