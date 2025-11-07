<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//* Vista de inicio de sesión
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
//* Vista de registro
Route::get('/register', function(){
    return view('auth.register');
})->name('register');

//* Rutas para registro, inicio de sesión y recuperación de contraseña
Route::prefix('users')->controller(UserController::class)->group(function(){
    Route::post('/register', 'store')->name('user.register');
    Route::post('/login', 'login')->name('user.login');
});


Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard', 'index')->name('dashboard');
    });
});
