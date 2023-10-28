<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        'airline_id',
        'flight_type_id',
        'flight_number',
        'plane_on',
        'departure_location_id',
        'arrival_location_id',
        'departure_date',
        'arrival_date',
        'departure_time',
        'arrival_time',
        'flight_status',
        'duration',
        'seats',
        'price'
    ];

    function airline()
    {
        return $this->belongsTo(Airline::class);
    }
    function flight_type()
    {
        return $this->belongsTo(FlightType::class);
    }
    function departure_location()
    {
        return $this->belongsTo(Airport::class);
    }
    function arrival_location()
    {
        return $this->belongsTo(Airport::class);
    }
    // function flight_status()
    // {
    //     return $this->belongsTo(FlightStatus::class);
    // }
}
