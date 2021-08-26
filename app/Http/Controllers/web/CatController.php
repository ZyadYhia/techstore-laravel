<?php

namespace App\Http\Controllers\web;

use App\Models\Cat;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function show($id)
    {
        $data['cats'] = Cat::get();
        $data['cat'] = Cat::findOrFail($id);
        $data['products'] = Product::where('cat_id', $id)->get();
        return view('web.cats.show')->with($data);
    }
}
