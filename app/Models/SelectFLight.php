<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectFLight extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'flight_id'
    ];
}
