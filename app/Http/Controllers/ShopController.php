<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view('ecommarce.products');
    }

    public function checkout(){
        return view('ecommarce.checkout');
    }

    public function orderComplete(){
        return view('ecommarce.order_complete');
    }

    public function cart(){
        return view('ecommarce.cart');
    }
}
