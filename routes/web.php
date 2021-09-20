<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', [EmployeeController::class, 'index']);
Route::get('employee', [EmployeeController::class, 'index']);
Route::get('employee/create', [EmployeeController::class, 'create']);
Route::post('employee', [EmployeeController::class, 'store']);
Route::get('employee/{id}/edit', [EmployeeController::class, 'edit']);
Route::put('employee/{id}', [EmployeeController::class, 'update']);
Route::delete('employee/{id}', [EmployeeController::class, 'destroy']);