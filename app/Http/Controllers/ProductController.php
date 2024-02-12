<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $products = Product::all();
        return view('product', compact('products'));
    }
    public function categorys()
    {
        $products = Product::all()->groupBy('category');
        return view('product', compact('products'));
    }

    public function detail($id){
        $products = Product::find($id);
        return view('detail',['product'=>$products]);
    }
    public function addToCart(Request $request){
        if($request->session()->has('user')){
            $carts = new Cart;
            $carts->user_id=$request->session()->get('user')['id'];
            $carts->product_id=$request->product_id;
            $carts->save();
            return redirect('/shop');

        }
        else{
            return redirect ('/login');
        }
        
    }
    
    
}
