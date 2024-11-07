<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/inventory/create', [InventoryController::class, 'create']);
// Add more routes as needed without database operations
Route::middleware(['auth'])->group(function () {
    Route::get('/inventory', [InventoryController::class, 'index']);
});
