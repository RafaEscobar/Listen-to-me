<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//* Inicio de sesión
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
//* Registro
Route::get('/register', function(){
    return view('auth.register');
})->name('register');

Route::prefix('users')->controller(UserController::class)->group(function(){
    Route::post('/register', 'store');
    Route::post('/login', 'login');
});

