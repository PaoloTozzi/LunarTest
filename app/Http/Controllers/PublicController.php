<?php

namespace App\Http\Controllers;

use Lunar\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() 
    {
        $products = Product::all();
        // $productPrice = $products->prices()->get();
        // $cart = \Lunar\Models\Cart::create([
        //     'currency_id' => 1,
        //     'channel_id' => 2,
        // ]);
        return view('welcome', compact('products'));
    }
}
