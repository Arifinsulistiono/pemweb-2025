<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::prefix('products')->group(function () {
   Route::get('/', [ProductController::class, 'index'])->name('products.index');
});

Route::prefix('clients')->group(function () {
   Route::get('/', [ClientController::class, 'index'])->name('client.index');
});