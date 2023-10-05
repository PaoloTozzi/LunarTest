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

    public function searchProducts(Request $request)
    {
        $products = Product::search($request->searched)->where('is_accepted', true)->paginate(6);
            return view('product.index', compact('products'));
    }
}
