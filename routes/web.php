<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/super/admin-login', [FrontendController::class, 'AdminLogin']);
Route::get('/', [FrontendController::class, 'HomePage']);
Route::get('/about', [AboutController::class, 'AboutPage']);
Route::get('/portfolio', [PortfolioController::class, 'PortfolioPage']);
Route::get('/blogs', [BlogController::class, 'BlogPage']);
Route::get('/contact', [ContactController::class, 'ContactPage']);
Route::post('/contact', [ContactController::class, 'storeMessage']);
Route::get('/product', [HomeController::class, 'ProductPage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
