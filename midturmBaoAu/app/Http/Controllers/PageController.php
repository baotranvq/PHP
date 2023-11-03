<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $product = Product::all();
        return view('page.home')-> with('product', $product);
        
    }
    public function getDetail($id)
    {
        $product = Product::find($id);
        return view('page.detail') ->with('product', $product);
        
    }
   
}
