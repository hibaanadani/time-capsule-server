<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;

Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);

Route::get("/users/{id?}", [UserController::class , "getAllUsers"]);
Route::post("/update_user/{id}", [UserController::class , "updateUser"]);
Route::post("/delete_user/{id?}", [UserController::class , "deleteAllUsers"]);
Route::post("/reject_user/{id}", [UserController::class , "rejectUser"]);
Route::get("/refresh_user/{id}", [UserController::class , "refreshUser"]);

Route::get("/messages/{id?}", [MessageController::class, "getMessages"]);
Route::post("/add_message", [MessageController::class, "addMessage"]);
Route::post("/delete_message/{id?}", [MessageController::class, "deleteAllMessages"]);
Route::get("/refresh_message/{id}", [UserController::class , "refreshMessage"]);
