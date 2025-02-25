<?php

use App\Http\Controllers\InsurancePlanController;
use App\Http\Controllers\InsurancePlansController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Model\Client;
use App\Http\Controllers\InsuranceController;

Route::prefix('insurance')->group(function () {
    // Route to get all insurance plans
    Route::get('/', [InsuranceController::class, 'index']);

    // Route to store new insurance
    Route::post('/', [InsuranceController::class, 'store']);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// clients


Route::get('clients/fetch', [ClientController::class, 'fetchClients'])->name('clients.fetch');
Route::get('/clients', ClientController::class . '@index');
Route::get('/clients/{id}', ClientController::class . '@show');
Route::post('/clients', ClientController::class . '@store');
Route::put('/clients/{id}', ClientController::class . '@update');
Route::delete('/clients/{id}', ClientController::class . '@destroy');
Route::get('/clients/search', [ClientController::class, 'search']);

// payments
Route::get('/payments', PaymentController::class . '@index');
Route::get('/payments/{id}', PaymentController::class . '@show');
Route::post('/payments', PaymentController::class . '@store');
Route::put('/payments/{id}', PaymentController::class . '@update');
Route::delete('/payments/{id}', PaymentController::class . '@destroy');


// plans

//insurance

// Route::get('/insurance', [App\Http\Controllers\InsuranceController::class, 'index']);
// Route::post('/insurance', [App\Http\Controllers\InsuranceController::class, 'store']);


Route::get('/plans', [App\Http\Controllers\PlanController::class, 'index']);
Route::get('/plans/{id}', [App\Http\Controllers\PlanController::class, 'show']);
Route::post('/plans', [App\Http\Controllers\PlanController::class, 'store']);
Route::put('/plans/{id}', [App\Http\Controllers\PlanController::class, 'update']);
Route::delete('/plans/{id}', [App\Http\Controllers\PlanController::class, 'destroy']);





// Insurance Plans Routes
Route::prefix('insurance-plans')->group(function () {
    // Get all insurance plans
    Route::get('/', [InsurancePlansController::class, 'index']);

    // Get a specific insurance plan
    Route::get('/{id}', [InsurancePlansController::class, 'getPlanById']);

    // Create a new insurance plan
    Route::post('/', [InsurancePlansController::class, 'store']);

    // Update an existing insurance plan
    Route::put('/{id}', [InsurancePlansController::class, 'updatePlan']);

    // Delete an insurance plan
    Route::delete('/{id}', [InsurancePlansController::class, 'deletePlan']);
});

// Insurance Routes (for creating a client's insurance and associating them with a plan)
Route::prefix('insurance')->group(function () {
    // Get all insurances (with client details)
    Route::get('/', [InsuranceController::class, 'index']);

    // Get a specific insurance (for a client and associated plan)
    Route::get('/{id}', [InsuranceController::class, 'show']);

    // Create a new insurance for a client (associate client with a plan)
    Route::post('/', [InsuranceController::class, 'store']);

    // Update an existing insurance
    Route::put('/{id}', [InsuranceController::class, 'update']);

    // Delete an insurance
    Route::delete('/{id}', [InsuranceController::class, 'destroy']);
});

//payment
Route::prefix('payments')->group(function () {
    // Get all payments
    Route::get('/', [PaymentController::class, 'index']);

    // Get a specific payment
    Route::get('/{id}', [PaymentController::class, 'show']);

    // Create a new payment
    Route::post('/', [PaymentController::class, 'store']);

    // Update an existing payment
    Route::put('/{id}', [PaymentController::class, 'update']);

    // Delete a payment
    Route::delete('/{id}', [PaymentController::class, 'destroy']);
});
// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('/dashboard', [UserController::class, 'dashboard'])
//         ->middleware('can:view-dashboard');

//     Route::get('/users', [UserController::class, 'index'])
//         ->middleware('can:manage-users');
