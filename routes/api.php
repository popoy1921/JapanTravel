<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\WeatherController;
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

Route::get('/weather/{city}', [WeatherController::class, 'getWeatherCity']);

Route::prefix('/venue')->group(function () {
    Route::get('/hotel/getList/{city}', [VenueController::class, 'getHotelList']);
    Route::get('/restaurant/getList/{city}', [VenueController::class, 'getRestaurantList']);
    Route::get('/attraction/getList/{city}', [VenueController::class, 'getAttractionList']);
});

