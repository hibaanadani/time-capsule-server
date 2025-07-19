<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Common\AuthController;
use App\Http\Controllers\User\MessageController;
use App\Http\Controllers\Admin\MessageController as MessageadminController;;

Route::post("/login", [AuthController::class , "login"]);
Route::post("/register", [AuthController::class , "register"]);

Route::get("/get_all_users/{id}", [UserController::class , "getAllUsers"]);
Route::get("/update_user/{id}", [UserController::class , "UpdateUser"]);
Route::get("/delete_all_users/{id}", [UserController::class , "DeleteAllUsers"]);
Route::get("/reject_user/{id}", [UserController::class , "rejectUser"]);
Route::get("/refresh_user/{id}", [UserController::class , "RefreshUser"]);

Route::get("/messages/{id?}", [MessageController::class, "getMessages"]);
Route::post("/add_update_message/{id?}", [MessageController::class, "addOrUpdateMessages"]);
Route::get("/delete_message/{id?}", [MessageController::class, "deleteAllMessage"]);