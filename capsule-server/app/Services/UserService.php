<?php

namespace App\Services;
use App\Models\User;

class UserService{

    static function getAllUsers($id=null){
        if(!$id){
            return User::all();
        } return User::find($id);
    }

    static function updateUser($data, $user){
        $user->first_name = $data["first_name"]? $data["first_name"]: $user->first_name; 
        $user->last_name = $data["last_name"]? $data["last_name"]: $user->last_name; 
        $user->username = $data["username"]? $data["username"]: $user->username; 
        $user->email = $data["email"]?$data["email"]:$user->email;
        $user->password = bcrypt($data["password"]|| $user->password);
        $user->save();
        return $user;
    }

    static function deleteAllUsers($id=null){
        if(!$id){
            $user= User::all();
        } $user= User::find($id);
        if($user){
        $user->delete();
        return true;}
        return false;
    }

    function rejectUser($id){
        $user=User::where('id',$id)->get();
        $user=$user->reject(function (User $user){
            return $user;
        });
    }

    static function refreshUser($id){
       $user = User::where('id', $id)->first();
    return $user;
    }
}