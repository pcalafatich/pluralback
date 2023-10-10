<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CobroController;
use App\Http\Controllers\RubroController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\ComercioController;
use App\Http\Controllers\PromotorController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\CobroSucursalController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::resource('/comercios', ComercioController::class);
Route::resource('/imagenes', ImagenController::class);
Route::resource('/localidades', LocalidadController::class);
Route::resource('/promotores', PromotorController::class);
Route::resource('/provincias', ProvinciaController::class);
Route::resource('/rubros', RubroController::class);
Route::resource('/cobros', CobroController::class);
Route::resource('/cobros_sucursales', CobroSucursalController::class);
Route::resource('/sucursales', SucursalController::class);


// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
