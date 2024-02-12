<?php

namespace App\Http\Controllers;

use App\Models\Latest;
use App\Models\Product;
use Illuminate\Http\Request;

class LatestController extends Controller
{
    public function index(){
        $latest = Latest::all();
        $product = Product::all();
        return view('latest',['latest_product' => $latest]);

    }

    
}
