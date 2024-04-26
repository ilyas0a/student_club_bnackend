<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClubController;

Route::apiResource('/events',EventController::class);
Route::apiResource('/clubs',EventController::class);
Route::apiResource('/contacts',EventController::class);

