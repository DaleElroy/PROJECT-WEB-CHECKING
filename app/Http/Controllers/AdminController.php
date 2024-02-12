<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Retrieve data from the database
        $users = User::all(); // Example: Retrieve users from the User model

        // Pass data to the view
        return view('backend.dashboard', ['users' => $users]);
    }
}
