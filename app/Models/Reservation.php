<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'date_arrived',
        'name',
        'phone_number',
        'email',
        'cost_day',
        'total',
        'date_departure',
    ];

}
