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
    public function toCart(Request $request)
    {
        $productId = $request->input('product_id');
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');
        $cart = $request->session()->get('cart', []);

       
        $cart[$productId] = [
            'name' => $productName,
            'price' => $productPrice,
            
        ];

        
        $request->session()->put('cart', $cart);

        
        return redirect()->route('cart')->with('success', 'Product added to cart successfully.');
    }
    public function viewCart(Request $request){
        if($request->session()->has('user'))
        return view('/login');
    }

    // DataBackend
    public function adminData(){
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }
     // DataBackend


    
    
}
