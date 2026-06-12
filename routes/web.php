<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::prefix('products')->group(function () {
    Route::get('/data', [ProductController::class, 'data']);
});

Route::resource('products', ProductController::class);