<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Latest;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function index()
    {
        $products = Product::all(); // Isang halimbawa kung paano makuha ang mga produkto mula sa database
        $pictures = Carousel::all(); // Isang halimbawa kung paano makuha ang mga larawan para sa carousel
        return view('main_document', compact('products', 'pictures'));
    }

}
