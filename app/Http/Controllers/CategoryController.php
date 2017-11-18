<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class CategoryController extends Controller
{
    
    public function index($id){
        $product = Product::where('cat_id',$id)->get();
        $category = Category::all();
        return view('category')
            ->with('products',$product)
            ->with('categorys',$category);
    }   
}
