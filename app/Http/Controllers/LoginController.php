<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // app/Http/Controllers/Auth/LoginController.php



    public function index(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
                return view('dashboard');
            
            else($usertype=='admin');

            return view('backend.admin');
        }
        

    }
    public function post(){
        return view('backend.dashboard');
    }
    public function admin(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='admin'){
                return view('backend.admin');
            }

        }
    }
}
