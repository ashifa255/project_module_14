<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get("/register-page",[AuthController::class,"registerPage"]);
Route::get("/login-page",[AuthController::class,"loginPage"]);


Route::post("/register",[AuthController::class,"register"]);
Route::post("/login",[AuthController::class,"login"]);


Route::middleware("user-cookie")->group(function(){

    //  Route::get("/dashboard",[DashboardController::class,"dashboard"]);

     Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('checkUser');

     Route::post("/logout", [AuthController::class,"logout"]);


});


