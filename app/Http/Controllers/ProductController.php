<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with(['category', 'supplier']);

        // Search filter
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('code', 'like', "%{$search}%")
                  ->orWhere('species', 'like', "%{$search}%");
            });
        }

        // Species filter
        if ($request->filled('species')) {
            $query->whereIn('species', $request->input('species'));
        }

        // Grade filter
        if ($request->filled('grade')) {
            $query->whereIn('grade', $request->input('grade'));
        }

        // Category / Format filter
        if ($request->filled('category')) {
            $query->whereIn('category_id', $request->input('category'));
        }

        $products = $query->paginate(6)->withQueryString();
        $totalProducts = Product::count();

        return view('product', compact('products', 'totalProducts'));
    }
}
