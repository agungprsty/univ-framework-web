<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\KotaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('auth/register', RegisterController::class);
Route::post('auth/login', LoginController::class);
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('kota',[KotaController::class,'index']);
    Route::get('kota/{id}',[KotaController::class,'baca']);
    Route::post('kota',[KotaController::class,'tambah']);
    Route::put('/kota/{id}', [KotaController::class,'ubah']);
    Route::delete('/kota/{id}', [KotaController::class,'hapus']);
    Route::get('/propinsi', [KotaController::class,'propinsi']);
});
