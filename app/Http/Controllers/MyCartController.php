<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\Cart;
use App\Product;
class MyCartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cart(){
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id',$user_id)->get();
        return view('shopcart')
        ->with('carts',$cart);
    }
}

