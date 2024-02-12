<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Bead;
use Illuminate\Http\Request;

class BeadController extends Controller
{
    public function index(){
        return Bead::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            'bead' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($request->hasFile('bead')) {
            $image = $request->file('bead');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('beads'), $imageName);

            $bead = new Bead();
            $bead->bead = $imageName;
            $bead->save();

            return response()->json(['message' => 'Bead uploaded successfully'], 201);
        } else {
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    }
}
