<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Latest;
use Illuminate\Http\Request;

class LatestController extends Controller
{
    public function index(){
        return Latest::all();
    }
    public function store(Request $request){
        // Validate the request data
        $request->validate([
            'name' => 'required', // Assuming 'name' is required
            'latest_product' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Create a new Latest instance
        $product = new Latest;
        $product->name = $request->name; // Assign the 'name' from the request to the 'name' attribute of the product
    
        // Check if a file is present in the request
        if ($request->hasFile('latest_product')) {
            $image = $request->file('latest_product');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            // Move the uploaded file to the 'uploads' directory
            $image->move(public_path('latest_product'), $imageName);
            // Set the 'latest_product' attribute of the product with the image file name
            $product->latest_product = $imageName;
        } else {
            // Return a response if no file was uploaded
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    
        // Save the product to the database
        $product->save();
    
        // Return a success response
        return response()->json(['message' => 'Latest Product has been uploaded'], 201);
    }
    
    public function destroy($id){
        $image = Latest::find($id);
        $valid =$image->delete();
        if($valid){
            return["result"=>"The carousel has been deleted"];

        }
        else{
            return["result"=>"The Carousel id doesn't exist"];
        }
    }
}
