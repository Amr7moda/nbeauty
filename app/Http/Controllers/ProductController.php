<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::get();
        return view('products.skincare', ['products' => $products]);
    }

    public function lashes()
    {
        $product = Product::get();
        return view('products.lashes', ['product' => $product]);
    }
}
