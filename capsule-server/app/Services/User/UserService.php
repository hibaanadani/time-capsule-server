<?php

namespace App\Services\User;

use App\Models\User;

class UserService{

    static function getAllUsers($id=null){
        if(!$id){
            return User::all();
        } return User::find($id);
    }

    static function UpdateUser($data, $user){
        $user->username = $data["username"]; 
        $user->email = $data["email"];
        $user->password = bcrypt($data["password"]);

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

    function RefreshUser($id){
       $user = User::where('id', $id)->first();
    return $user;
    }
}
