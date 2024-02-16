<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
    public static function cartItem()
    {
        $user_id = session()->get('user')['id'];
        // $items = Cart::where('user_id',$user_id)->get();
        // return count($items);
        return Cart::where('user_id',$user_id)->count();

    }
    public function cartList()
    {
        $userId= Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*','cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();
        return view('cartlist',compact('products'));
    }
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
}
