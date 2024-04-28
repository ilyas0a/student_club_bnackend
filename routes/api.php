<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClubController;

//Route::resource('/events',EventController::class);
//Route::resource('/clubs',EventController::class);
//Route::resource('/contacts',EventController::class);

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('/clubs',EventController::class);
});

Route::post('/auth/student/login',[AuthController::class,'loginStudent']);
Route::post('/auth/student/register',[AuthController::class,'registerStudent']);

Route::post('/auth/club/login',[AuthController::class,'loginClub']);
Route::post('/auth/club/register',[AuthController::class,'registerClub']);
