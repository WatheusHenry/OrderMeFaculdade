<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EventosController;

// Defina o namespace para os controladores
//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::ApiResource('eventos', EventosController::class);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'check']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/{id}', [TaskController::class, 'show']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
