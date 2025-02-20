<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// clients


Route::get('/clients', ClientController::class . '@index');
Route::get('/clients/{id}', ClientController::class . '@show');
Route::post('/clients', ClientController::class . '@store');
Route::put('/clients/{id}', ClientController::class . '@update');
Route::delete('/clients/{id}', ClientController::class . '@destroy');


// plans

Route::get('/plans', [App\Http\Controllers\PlanController::class, 'index']);
Route::get('/plans/{id}', [App\Http\Controllers\PlanController::class, 'show']);
Route::post('/plans', [App\Http\Controllers\PlanController::class, 'store']);
Route::put('/plans/{id}', [App\Http\Controllers\PlanController::class, 'update']);
Route::delete('/plans/{id}', [App\Http\Controllers\PlanController::class, 'destroy']);
