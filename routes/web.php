<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ShopController::class, 'shop'])->name('shop');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');
Route::get('/order-complete', [ShopController::class, 'orderComplete'])->name('order_complete');

//Route::get('/home','HomeController::class, index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
 