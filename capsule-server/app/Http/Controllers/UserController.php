<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Models\User;

class UserController extends Controller
{
    //
      function getAllUsers($id= null){
        $users = UserService::getAllUsers($id);
         if($users){
            return $this->responseJSON($users);
        return $this->responseJSON(null, "error", 401);
    }
}
    function UpdateUser(Request $request, $id){
        $user = UserService::getAllUsers($id);
        $user = UserService::UpdateUser($request, $user);
        if($users){
            return $this->responseJSON($users);
        return $this->responseJSON(null, "error", 401);
    }
}
    function DeleteAllUsers($id= null){
        $users = UserService::DeleteAllUsers($id);
         if($users){
            return $this->responseJSON($users);
        return $this->responseJSON(null, "error", 401);
    }
}
    function rejectUserByID($id){
        $users = UserService::rejectUserByID($id);
         if($users){
            return $this->responseJSON($users);
        return $this->responseJSON(null, "error", 401);
    }
}   
     function RefreshUser($id){
        $users = UserService::RefreshUser($id);
         if($users){
            return $this->responseJSON($users);
        return $this->responseJSON(null, "error", 401);
    }
}

}
