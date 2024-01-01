<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CashierController;

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

Route::redirect('/', '/login')
    ->middleware(['guest']);

Route::get('/login', [LoginController::class, 'index'])
    ->middleware(['guest'])
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware(['guest']);

Route::get('/register', [RegisterController::class, 'index'])
    ->middleware(['guest'])
    ->name('register');

Route::post('/register', [RegisterController::class, 'register'])
    ->middleware(['guest']);

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/cashier', [CashierController::class, 'index'])
    ->middleware(['auth'])
    ->name('cashier');
