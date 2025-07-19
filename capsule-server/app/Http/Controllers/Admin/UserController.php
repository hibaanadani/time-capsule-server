<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
      function getAllUsers(){
        $users = User::all();

        $response = [];
        $response["status"] = "success";
        $response["payload"] = $users;

        return json_encode($response, 200);
    }
      function getUserById(){
        $users = User::all();

        $response = [];
        $response["status"] = "success";
        $response["payload"] = $users;

        return json_encode($response, 200);
    }
      function getUsersByName(){
        $users = User::fin;

        $response = [];
        $response["status"] = "success";
        $response["payload"] = $users;

        return json_encode($response, 200);
    }

    function addUser(Request $request){
        $user = new User;
        $user->firstname =$data["firstname"]; 
        $user->lastname =  $data["lastname"];
        $user->username =  $data["username"];
        $user->email =  $data["email"];
        $user->password = $data["password"];
        $user->save();
        return $user;

        $response = [];
        $response["status"] = "success";
        $response["payload"] = $user;

        return json_encode($response, 200);
    }
}
