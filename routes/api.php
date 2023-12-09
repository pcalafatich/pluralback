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
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\MobileUserController;
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
//Cobros
Route::resource('/cobros', CobroController::class);
//Cobros Sucursales
Route::resource('/cobros_sucursales', CobroSucursalController::class);
//Comercios
Route::post('/comercios/actualizarcomercioapp', [ComercioController::class,'actualizarcomercioapp']);
Route::post('/comercios/agregarcomercioapp', [ComercioController::class,'agregarcomercioapp']);
Route::get('/comercios/datoscomercioapp/{email}', [ComercioController::class,'datoscomercioapp']);
Route::post('/comercios/validarcomercioapp', [ComercioController::class,'validarcomercioapp']);
Route::resource('/comercios', ComercioController::class);
//Descuentos
Route::get('/descuentos/descuentosxid/{comercio_id}', [DescuentoController::class,'descuentosxid']);
Route::post('/descuentos/descuentosxlocalidad/', [DescuentoController::class,'descuentosxlocalidad']);
Route::resource('/descuentos', DescuentoController::class);
//Imagenes
Route::resource('/imagenes', ImagenController::class);
//Localidades
Route::get('/localidades/buscarlocalidadapp/{nombre}', [LocalidadController::class,'buscarlocalidadapp']);
Route::get('/localidades/localidadesconcomercios', [LocalidadController::class,'localidadesconcomercios']);
Route::get('/localidades/localidadescondescuentos', [LocalidadController::class,'localidadescondescuentos']);

Route::resource('/localidades', LocalidadController::class);
//MobileUsers
Route::get('/mobileusers/getusuarioapp/{dni}', [MobileUserController::class,'getusuarioapp']);
Route::post('/mobileusers/agregarusuarioapp', [MobileUserController::class,'agregarusuarioapp']);
Route::post('/mobileusers/validarusuarioapp', [MobileUserController::class,'validarusuarioapp']);
Route::resource('/mobileusers', MobileUserController::class);
//Promotores
Route::resource('/promotores', PromotorController::class);
//Provincias
Route::resource('/provincias', ProvinciaController::class);
//Rubros
Route::get('/rubros/rubrosapp', [RubroController::class,'rubrosapp']);
Route::resource('/rubros', RubroController::class);
//Sucursales
Route::resource('/sucursales', SucursalController::class);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
