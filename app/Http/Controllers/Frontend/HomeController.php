<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('pages.frontend.home.index');
    }
    function getLocation(Request $request)
    {
        if ($request->departureLocation && !$request->departureLocation == null) {
            $airports = Airport::where('name', 'like', '%' . $request->departureLocation . '%')->latest()->get();
            if ($airports->count() > 0) {
                return $airports;
            }else{
                return "not found";
            }
        }elseif ($request->arrivelLoaction && !$request->arrivelLoaction == null) {
            $airports = Airport::where('name', 'like', '%' . $request->arrivelLoaction . '%')->latest()->get();
            if ($airports->count() > 0) {
                return $airports;
            }else{
                return "not found";
            }
        }else{
            return "false";
        }
    }
    function getLocationById($id)
    {
        return Airport::findOrFail(intval($id));
    }
}
