<?php

namespace App\Http\Controllers;

use App\Models\Bead;
use Illuminate\Http\Request;

class BeadController extends Controller
{
    public function index(){
        $bead= Bead::all();
        return view('customize', ['beads' => $bead]);
    }

}
