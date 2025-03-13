<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // for showinf all products
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'description' => 'nullable',
            'price' => 'required|numeric', // Changed to numeric for simplicity
        ]);

        $newProduct = Product::create($data);

        return redirect()->route('product.index');
    }

    // Product is the model, productId jeta,shetar information guloi show korbe Model er.
    public function edit(Product $productId)
    // receive the product id from the route
    {
        return view('products.edit', ['product' => $productId]);
    }

    public function update(Request $request, Product $productId)
    {
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);

        $productId->update($data);

        return redirect()->route('product.index')->with('message', 'Product updated successfully');
    }
}
