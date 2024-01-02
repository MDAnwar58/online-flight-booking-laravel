<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'contact_info_id',
        'person_info_id',
        'flight_id',
        'person',
        'currency',
        'taxes',
        'total_pay',
        'payment_method'
    ];
}
