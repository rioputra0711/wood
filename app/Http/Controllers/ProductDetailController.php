<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class ProductDetailController extends Controller
{
    public function show($code)
    {
        $product = Product::with('category', 'supplier')
            ->where('code', $code)
            ->firstOrFail();

        return view('product-detail', compact('product'));
    }
}
