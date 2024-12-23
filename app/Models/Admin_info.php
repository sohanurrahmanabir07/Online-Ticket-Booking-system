<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_info extends Model
{
    use HasFactory;
    protected $table='admin_info';
    protected $fillable = [
        'name',
        'email',
        'adress',
        'phone',
        'password',
        'refund_req'
        
    ];
    public $timestamps = false;

}
