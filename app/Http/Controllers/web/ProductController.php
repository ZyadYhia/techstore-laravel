<?php

namespace App\Http\Controllers\web;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cat;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::get();
        $data['cats'] = Cat::get();
        return view('web.products.index')->with($data);
    }
    public function show(Product $product)
    {
        $data['product'] = $product;
        return view('web.products.show')->with($data);
    }
}
