<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function user(){
        return User::all();

        
    }
    public function add(Request $request){
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $registered= $user->save();
        if($registered)
        {
            return ["Result"=>"New user has been saved"];
        }
        else{
            return ["Result"=>"New user is failed"];
        }


    }
    public function update(Request $request){
        $user = User::find($request->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $update = $user->save();

        if($update){
            return["Result"=>"Account has been updated"];
            
        }
        else{
            return["Result"=>"Account has not been updated"];
        }

    }
    public function search($name){
        return User::where("name","like","%".$name."%")->get();
    }



    public function delete($id){
        $user = User::find($id);
        $account=$user->delete();
        if($account)
        {
            return ["result "=>"Data has been deleted"];

        }
        else{
        return ["result "=>"Data has not been delete"];
        }

    }
    public function testdata(Request $request){
        $rules=array(
            "name"=>"required|min:4|max:14",
            "email" => "required|min:7|max:20|regex:/^.+@.+..+$/",
            "password"=>"required|min:8|max:20"
            
        );    
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
        }
        else{
            $user = new User;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;
            $result=$user->save();
            if($result)
            {
                return ["Result"=>"New user has been saved"];
            }
            else{
                return ["Result"=>"Failed"];
            }
        }
    }
}
