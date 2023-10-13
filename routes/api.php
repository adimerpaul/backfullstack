<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mascotas',[\App\Http\Controllers\MascotaController::class,'index']);
Route::post('mascotas',[\App\Http\Controllers\MascotaController::class,'store']);
Route::put('mascotas/{id}',[\App\Http\Controllers\MascotaController::class,'update']);
Route::delete('mascotas/{id}',[\App\Http\Controllers\MascotaController::class,'destroy']);