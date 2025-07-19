<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use  App\Services\AuthService;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function login(Request $request){
        $user = AuthService::login($request);
        if($user)
            return $this->responseJSON($user);
        return $this->responseJSON(null, "error", 401);
    }

    public function register(Request $request){
        $user = AuthService::register($request);
        return $this->responseJSON($user);
    }
}
