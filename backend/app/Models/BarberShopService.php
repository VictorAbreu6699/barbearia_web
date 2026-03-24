<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarberShopService extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'barber_shop_id',
        'name',
        'description',
        'duration_minutes',
        'price',
        'is_active'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
