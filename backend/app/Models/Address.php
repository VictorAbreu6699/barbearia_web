<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'id',
        'barber_shop_id',
        'address',
        'city_id',
        'postal_code'
    ];
}
