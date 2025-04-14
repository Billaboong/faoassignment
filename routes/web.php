<?php

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\UsersController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/performance', [UsersController::class, 'getUsersWithoutCache'])->name('performance.withoutcache');
Route::get('/performance/cache', [UsersController::class, 'getUsersWithCache'])->name('performance.withcache');
Route::get('/performance/view', [UsersController::class, 'performanceView'])->name('performance.view');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   
    
});

require __DIR__ . '/auth.php';
