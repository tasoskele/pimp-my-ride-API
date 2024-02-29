<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\SviController;
use App\Http\Controllers\ServiceController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

Route::apiResource('vehicles', VehicleController::class);
Route::apiResource('vehicles.insurances', InsuranceController::class);
Route::apiResource('vehicles.svis', SviController::class);
Route::apiResource('vehicles.services', ServiceController::class);
