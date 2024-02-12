<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // app/Http/Controllers/Auth/LoginController.php



public function redirectTo()
{
    if (Auth::user()->isAdmin()) {
        return '/admin/dashboard';
    } else {
        return '/home';
    }
}
}
