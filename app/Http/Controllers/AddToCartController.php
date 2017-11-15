<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\Cart;
use App\Product;
class AddToCartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function baseWork($id){
        $user_id = Auth::user()->id; 
        $product = Product::where('id',$id)->first();
        $product_price = $product->price;
        $product_title = $product->title;
        $product_img = $product->img;
        $add = new Cart; 
        $add->user_id = $user_id;
        $add->product_id = $id;
        $add->product_price=$product_price;
        $add->product_title=$product_title;
        $add->product_img = $product_img;
        $add->save();
        return redirect('/');
    }
}
