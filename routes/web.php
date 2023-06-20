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

Route::get('/', [FrontendController::class, 'HomePage']);
Route::get('/super/admin-login', [FrontendController::class, 'AdminLogin'])->name('admin.login');
Route::get('/about', [AboutController::class, 'AboutPage']);
Route::get('/portfolio', [PortfolioController::class, 'PortfolioPage']);
Route::get('/blogs', [BlogController::class, 'BlogPage']);
Route::get('/contact', [ContactController::class, 'ContactPage']);
Route::post('/contact', [ContactController::class, 'storeMessage']);

Auth::routes([
//    'login' => false,
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(['prefix' => 'admin','middleware' => ['auth']], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [FrontendController::class, 'destroy'])
        ->name('logout');
});
