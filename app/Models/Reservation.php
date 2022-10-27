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
        'client_id',
        'cost_day',
        'total',
        'date_departure',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
