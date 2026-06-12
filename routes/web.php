<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {

    Product::create([
        'name' => 'Test Phone',
        'price' => 500
    ]);

    return Product::all();
});