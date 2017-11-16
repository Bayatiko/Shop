<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class CategoryController extends Controller
{
    
    public function index($id){
        $product = Product::where('cat_id',$id)->get();
        return view('category')->with('products',$product);
    }
}
