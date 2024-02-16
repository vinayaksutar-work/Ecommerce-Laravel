<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product',compact('products'));
    }
    public function details($id)
    {
        $products = Product::find($id);
        return view('details',compact('products'));
    }
    public function search(Request $request)
    {
        $products = Product::where('name','like','%'.$request->input('search_name').'%')->get();
        return view('search',compact('products'));
    }
    public function addToCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart();
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
}
