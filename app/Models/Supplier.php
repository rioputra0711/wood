<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'company_name',
        'contact_name',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'zip_code',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function rfqs()
    {
        return $this->hasMany(Rfq::class);
    }

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }
}
