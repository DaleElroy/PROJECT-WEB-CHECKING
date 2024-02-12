<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $picture = Carousel::all();
        return view('carousel', ['pictures' => $picture]);
    }
}
