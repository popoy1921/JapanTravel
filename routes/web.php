<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\PageRendererController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageRendererController::class, 'showHomePage'])->name('home');
Route::get('/weather', [PageRendererController::class, 'showWeatherPage'])->name('weather');
Route::get('/venue/{category}', [PageRendererController::class, 'showVenuePage'])->name('venue');
