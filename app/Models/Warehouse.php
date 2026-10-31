<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'name',
        'code',
        'address',
        'city',
        'country',
    ];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }
}
