<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'HomePage']);
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'AboutPage']);
Route::get('/portfolio', [\App\Http\Controllers\HomeController::class, 'PortfolioPage']);
Route::get('/blogs', [\App\Http\Controllers\HomeController::class, 'BlogPage']);
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'ContactPage']);
Route::get('/product', [\App\Http\Controllers\HomeController::class, 'ProductPage']);
