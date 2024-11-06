<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ClienteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cliente/select',[ClienteController::class, 'select']);
Route::post('/cliente/store',[ClienteController::class, 'store']);
Route::put('/cliente/update/{id}',[ClienteController::class, 'update']);
Route::delete('/cliente/delete/{id}',[ClienteController::class, 'delete']);
Route::get('/cliente/find/{id}',[ClienteController::class, 'find']);

//Paises

Route::get('/pais/select',[PaisController::class, 'select']);









