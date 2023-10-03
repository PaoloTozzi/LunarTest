<?php

namespace App\Http\Controllers;

use Lunar\Models\Cart;
use Lunar\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product) 
    {

        return view('product.show', compact('product'));
    }
}
