<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email',
        'phone',
        'date_of_birth',
        'address',
        'city',
        'country',
        'frequent_flyer_number'
    ];
}
