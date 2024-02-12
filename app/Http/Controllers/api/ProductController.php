<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return Product::all();
    }
    public function add(Request $request){
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;
    
        if ($request->hasFile('gallery')) {
            $image = $request->file('gallery');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->gallery = $imageName;
        }
    
        $posted = $product->save();
        if($posted){
            return ["Result" => "The Product was successfully posted"];
        } else {
            return ["Result" => "The Product was not posted"];
        }
    }
    public function showByCategory($category){
        $products = Product::where('category', $category)->get();
        return view('product', compact('products', 'category'));
    }
    
    public function update(Request $request){
        $product = Product::find($request->id);
        if (!$product) {
            return ["Result" => "Product not found"];
        }
    
        $product->title=$request->title;
        $product->price=$request->price;
        $product->category=$request->category;
        $product->description=$request->description;
        $product->gallery=$request->gallery;
        $update = $product->save();

        if($update){
            return["Result"=>"The Product has been updated"];
        }
        else{
            return["Result"=>"The Product has not been updated"];
        }

        
    }
    public function delete($id){
        $product = Product::find($id);
        $item = $product->delete();
        if($item){
            return["Result"=>"The Product has been deleted"];
        }
        else{
            return["Result"=>"The product is failed to delete"];
        }
    }
    public function search($title){
        return Product::where("title","like","%".$title."%")->get();
    }
    
}
