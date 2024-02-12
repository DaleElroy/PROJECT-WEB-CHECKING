<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller


{ 
    public function userData(){
        $users = User::all();
        $userCount = $users->count();
        return view('backend.user',compact('users','userCount'));
        
    }
    public function login(Request $request){
       $user= User::where(['email'=>$request->email])->first();
       if (!$user || Hash::check($request->password,$user->password)){
        return "Doesnt match";
       }
       else{
        $request->session()->put('user',$user);
        return redirect('/');
       }
    }
}
