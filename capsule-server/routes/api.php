<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;



Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);

Route::get("/get_all_users/{id?}", [UserController::class , "getAllUsers"]);
Route::patch("/update_user/{id}", [UserController::class , "UpdateUser"]);
Route::delete("/delete_user/{id?}", [UserController::class , "DeleteAllUsers"]);
Route::post("/reject_user/{id}", [UserController::class , "rejectUser"]);
Route::get("/refresh_user/{id}", [UserController::class , "RefreshUser"]);

Route::get("/messages/{id?}", [MessageController::class, "getMessages"]);
Route::post("/add_update_message/{id?}", [MessageController::class, "addOrUpdateMessages"]);
Route::delete("/delete_message/{id?}", [MessageController::class, "deleteAllMessage"]);