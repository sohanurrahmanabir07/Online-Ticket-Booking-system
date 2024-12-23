<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight_info extends Model
{
    use HasFactory;
    protected $table="flight_info";
    protected $fillable=[

        'flight_id',
        'flight_name',
        'start_destination',
        'final_destination',
        'start_time',
        'finish_time',
        'class',
        'total_seat',
        'price',
        'journey_date',
        'cabin_kg',
        'check_in'
       

    ];
    public $timestamps = false;
}
