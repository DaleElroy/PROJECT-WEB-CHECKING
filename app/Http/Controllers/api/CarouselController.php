<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index(){
        return Carousel::all();
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $photo = new Carousel();
            $photo->photo = $imageName;
            $photo->save();
            return response()->json(['message' => 'Photo uploaded successfully'], 201);
        } else {
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    }
    public function destroy($id){
        $image = Carousel::find($id);
        $valid =$image->delete();
        if($valid){
            return["result"=>"The carousel has been deleted"];

        }
        else{
            return["result"=>"The Carousel id doesn't exist"];
        }
    }
}
