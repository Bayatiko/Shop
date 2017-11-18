<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\Cart;
use App\Product;
use App\Category;
class MyCartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cart(){
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id',$user_id)->get();
        $category = Category::all();
        $product = Product::inRandomOrder()->take(4)->get();
        return view('shopcart')
        ->with('carts',$cart)
        ->with('categorys',$category)
        ->with('products',$product);
    }

    public function delete($id){
        $cart = cart::find($id);
    	if(!$cart){
    		return redirect('/showmycart');
    	}

 $cart->delete();
        return redirect('/showmycart');
    }
}
