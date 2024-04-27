<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClubController;

Route::resource('/events',EventController::class);
Route::resource('/clubs',EventController::class);
Route::resource('/contacts',EventController::class);

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('/clubs',EventController::class);
});
