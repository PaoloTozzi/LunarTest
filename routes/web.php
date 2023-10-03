<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/product/detail/{product}', [ProductController::class, 'show'])->name('productDetail');

Route::post('/checkout/{product}', [PaymentController::class, 'checkout'])->middleware('auth')->name('checkout');
// Route::get('/checkout/success/{product}', [PaymentController::class, 'success'])->name('payment.success');
// Route::get('/checkout/cancel/{product}', [PaymentController::class, 'cancel'])->name('payment.cancel');