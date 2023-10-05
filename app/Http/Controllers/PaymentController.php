<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Lunar\Models\Cart;
use Lunar\Models\Order;
use Stripe\StripeClient;
use Lunar\Models\Product;
use Lunar\Models\CartLine;
use Lunar\Facades\Payments;
use Illuminate\Http\Request;
use Lunar\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Lunar\Models\ProductVariant;

class PaymentController extends Controller
{
    public $paymentType = 'card';
    public $allowMultiple = false;
    public $draftOrderId = null;
    // public function getClient()
    // {
    //     return new StripeClient(
    //         config('services.stripe.key')
    //     );
    // }



    public function checkout(Product $product)
    {
        // dd($product);
        $cart = Cart::create([
            'currency_id' => 1,
            'channel_id' => 1,
        ]);

        $cart->lines()->create([
            'cart_id' => $cart->id,
            'purchasable_type' => ProductVariant::class,
            'purchasable_id' => $product->id,
            'quantity' => 1,
            'meta' => null
        ]);

    

        // $this->order = $cart->addresses()->create([
        //     'order_id' => 1,
        //     'country_id' => 1,
        //     'title' => null,
        //     'first_name' => 'Jacob',
        //     'last_name' => null,
        //     'company_name' => null,
        //     'line_one' => '123 Foo Street',
        //     'line_two' => null,
        //     'line_three' => null,
        //     'city' => 'London',
        //     'state' => null,
        //     'postcode' => 'NW1 1WN',
        //     'delivery_instructions' => null,
        //     'contact_email' => null,
        //     'contact_phone' => null,
        //     'type' => 'shipping', // billing/shipping
        //     'billing_address'=>'123 Foo Street',
        //     'shipping_option' => null, // A unique code for you to identify shipping
        // ]);

        $order = Cart::first()->createOrder(
            $this->allowMultiple,
            $this->draftOrderId,
        );
        
        $order->shippingAddress;
        $order->billingAddress;
        
        $order->isPlaced();

        

        $driver = Payments::driver('cash-in-hand');
        $driver->cart($cart);

        return redirect(route('home'));
    }
}
