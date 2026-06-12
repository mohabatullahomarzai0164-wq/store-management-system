<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     */

public function data()
{
    $products = Product::all()->map(function ($item) {
        return [
            'id' => (string) $item->_id,
            'name' => $item->name,
            'price' => $item->price,
            'category' => $item->category,
            'stock' => $item->stock,
            'image' => $item->image,
        ];
    });

    return response()->json($products);
}
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
  Product::create([
    'name' => 'New Phone',
    'price' => 1000,
    'category' => 'Mobile',
    'stock' => 5,
    'image' => 'test.jpg'
]);

return "Saved";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
