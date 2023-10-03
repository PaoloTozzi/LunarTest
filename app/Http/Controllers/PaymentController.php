<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lunar\Facades\Payments;

class PaymentController extends Controller
{
    public $paymentType = 'cash-in-hand';

    public function checkout()
    {
        $payment=Payments::driver($this->paymentType)->authorize();
    }
}
