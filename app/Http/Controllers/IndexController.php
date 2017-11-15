<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    public function takeAll(){
        $product = Product::all();
        return view('index')
        ->with('product',$product);
    }
}
