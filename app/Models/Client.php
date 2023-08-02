<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut',
        'name',
        'lastname',
        'address_street',
        'address_number',
        'address_commune',
        'address_city',
        'phone',
    ];
}