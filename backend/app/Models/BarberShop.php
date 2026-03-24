<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberShop extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
