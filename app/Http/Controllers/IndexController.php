<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class IndexController extends Controller
{
    public function takeAll(){
        $product = Product::all();
        $category = Category::all();
        return view('index')
        ->with('product',$product)
        ->with('categorys',$category);
    }
}
