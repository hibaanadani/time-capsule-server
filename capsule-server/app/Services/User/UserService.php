<?php

namespace App\Services\User;

use App\Models\User;

class UserService{

    static function getAllUsers(){
            return User::all();
    }

    static function getUserById($id){
        return User::find($id);
    }

    static function getUsersByName($name){
        return User::find($name);
    }

    function rejectUserByID($id){
        $user=User::where('id',$id)->get();
        $user=$user->reject(function (User $user){
            return $user;
        });
    }

    function rejectUserByName($name){
        $users=User::where('name',$name)->get();
        $users=$users->reject(function (User $user){
            return $users;
        });
    }
    function RefreshUser($name){
        $user=User::where('name',$name)->first();
        $user->name=$name;
        $user->refresh();
        $user->$name;
    return $user;
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

    function deleteUserById($id){
        $user=User::find($id);
        $user->delete();
    }
    function deleteUserByName($name){
        $user=User::find($name);
        $user->delete();
    }

}
