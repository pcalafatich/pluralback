<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\ComercioController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::apiResource('/provincias', ProvinciaController::class);
Route::apiResource('/localidades', LocalidadController::class);
Route::apiResource('/comercios', ComercioController::class);


Route::post('/login', [AuthController::class, 'login']);
