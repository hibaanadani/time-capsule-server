<?php

namespace App\Services\User;

use App\Models\User;

class UserService{

    static function getAllUsers(){
            return User::all();
    }

    static function getUsersById($id){
        return User::find($id);
    }

    static function getUsersByName($name){
        return User::find($name);
    }

    static function createUser($data){
        $user->firstname =$data["firstname"]; 
        $user->lastname =  $data["lastname"];
        $user->username =  $data["username"];
        $user->email =  $data["email"];
        $user->password = $data["password"];
        $user->save();
        return $user;
    }

}
