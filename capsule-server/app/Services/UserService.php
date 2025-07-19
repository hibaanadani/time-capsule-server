<?php

namespace App\Services;

use App\Models\User;

class UserService{

    static function getAllUsers($id=null){
        if(!$id){
            return User::all();
        } return User::find($id);
    }

    static function UpdateUser($data, $user){
        $user->username = $data["username"]? $data["username"]:$user->username; 
        $user->email = $data["email"]? $data["email"]:$user->email;
        $user->password = bcrypt($data["password"]? $data["password"]:$user->password);

        $user->save();
        return $user;
    }

    static function DeleteAllUsers($id=null){
        if(!$id){
            $user= User::all();
        } $user=User::find($id);
        $user->delete();
    }

    function rejectUser($id){
        $user=User::where('id',$id)->get();
        $user=$user->reject(function (User $user){
            return $user;
        });
    }

    static function RefreshUser($id){
       $user = User::where('id', $id)->first();
    return $user;
    }
}
