<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;

Route::get('/', function () {
    return view('index');
});

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{code}', [ProductDetailController::class, 'show'])->name('product.detail');
