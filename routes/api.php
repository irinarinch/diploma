<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\HallController;


Route::prefix("v1")->middleware(["throttle:api"])->group(function () {
    Route::post("login", [AuthController::class, "login"])->name("login");
});

Route::prefix("v1")->middleware(["throttle:api", "auth:sanctum"])->group(function () {
    Route::get("logout", [AuthController::class, "logout"])->name("logout");
    
});

Route::apiResource("halls", HallController::class);