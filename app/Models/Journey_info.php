<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey_info extends Model
{   use HasFactory;
    protected $table='flight_journey_info';
    protected $fillable=[
        'passenger_name',
        'email',
        'phone',
        'passenger_type',
        'flight_id',
        'user_id',

    ];
    public $timestamps = false;
}
