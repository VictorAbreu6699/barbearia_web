<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarberShopAppointment extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'professional_id',
        'client_id',
        'service_id',
        'status_id',
        'scheduled_at'
    ];
}
