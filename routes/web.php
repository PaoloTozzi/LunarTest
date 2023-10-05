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
Route::get('/form-update-info',[PublicController::class, 'formUpdateInfo'])->middleware('auth')->name('formUpdateInfo');
Route::post('/update-info',[PublicController::class, 'updateInfo'])->name('updateInfo');
Route::get('/product/detail/{product}', [ProductController::class, 'show'])->name('productDetail');
Route::get('/search-product', [ProductController::class, 'searchProducts'])->name('searchProducts');

Route::post('/checkout/{product}', [PaymentController::class, 'checkout'])->middleware('auth')->name('checkout');