<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AirlineController extends Controller
{
    function index()
    {
        $airlines = Airline::latest()->get();
        return view('pages.backend.airline.index', compact('airlines'));
    }
    function create(Request $request)
    {
        $slug = $this->generateSlug($request->name);
        $airline = new Airline();
        $airline->name = $request->name;
        $airline->slug = $slug;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '-airline-' . $extension;
            $file->move('upload/images/airline/', $filename);
            $airline->image = $filename;
        }
        $airline->save();

        return redirect()->route('admin.airline')->with('success', 'Airline Info Created!');
    }
    public function generateSlug($name)
    {
        $airport = Airline::where('name', $name)->get();
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
        $airline = Airline::findOrFail(intval($id));

        return view('pages.backend.airline.edit', compact('airline'));
    }
    function update(Request $request, $id)
    {
        $airline = Airline::findOrFail(intval($id));
        if ($airline->name != $request->name) {
            $slug = $this->generateSlug($request->name);
        } else {
            $slug = $airline->slug;
        }
        $airline->name = $request->name;
        $airline->slug = $slug;
        if ($request->hasFile('image')) {
            $file_path = public_path() . '/upload/images/airline/' . $airline->image;

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '-airline-update-' . $extension;
            $file->move('upload/images/airline/', $filename);
            $airline->image = $filename;
        }
        $airline->update();

        return redirect()->route('admin.airline')->with('success', 'Airline Info Updated!');
    }
    function destroy($id)
    {
        $airline = Airline::findOrFail(intval($id));
        $file_path = public_path() . '/upload/images/airline/' . $airline->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $airline->delete();

        return redirect()->route('admin.airline')->with('success', 'Airline Info Deleted!');
    }
}
