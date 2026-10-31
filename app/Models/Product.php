<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'category_id',
        'supplier_id',
        'name',
        'species',
        'grade',
        'thickness',
        'width',
        'length',
        'moisture_content',
        'surface_type',
        'origin',
        'legal_wood',
        'description',
        'price',
        'stock',
        'moq',
        'unit',
        'image_path',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function rfqs()
    {
        return $this->hasMany(Rfq::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
