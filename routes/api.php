<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/contact/submit', [ContactController::class, 'submit']);

Route::get('/contact/service-types', [ContactController::class, 'getServiceTypes']);

Route::post('bookings/store', [BookingController::class, 'store']);
