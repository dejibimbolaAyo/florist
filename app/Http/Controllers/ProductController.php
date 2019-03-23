<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        # code...
        $products = Product::all();
        return view('front.products')->with('products', $products);
    }

}
