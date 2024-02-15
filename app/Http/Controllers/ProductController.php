<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('product',compact('products'));
    }
    function details($id)
    {
        $products = Product::find($id);
        return view('details',compact('products'));
    }
    function search(Request $request)
    {
        $products = Product::where('name','like','%'.$request->input('search_name').'%')->get();
        return view('search',compact('products'));
    }
}
