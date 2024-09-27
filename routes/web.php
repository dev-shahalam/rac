<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

//User Controller
Route::get('/', [UserController::class, 'HomePage']);
Route::get('cars', [UserController::class, 'CarsPage']);
Route::get('service', [UserController::class, 'ServicePage']);
Route::get('about', [UserController::class, 'AboutPage']);
Route::get('contact', [UserController::class, 'ContactPage']);






//Rental Controller
Route::post('booking',[BookingController::class,'Booking']);
