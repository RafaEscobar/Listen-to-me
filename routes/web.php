<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

//! RUTAS INICIALES
//* Vista de inicio de sesión
Route::get('/', function () {
    return view('welcome');
})->name('login');
//* Vista de registro
Route::get('/register', function(){
    return view('auth.register');
})->name('register');

//! RUTAS INICIALES DE PROCEDIMIENTO
//* Rutas para registro, inicio de sesión y recuperación de contraseña
Route::prefix('users')->controller(UserController::class)->group(function(){
    Route::post('/register', 'store')->name('user.register');
    Route::post('/login', 'login')->name('user.login');
});

//! Rutas protegidas
Route::middleware(['auth', 'verified'])->group(function () {
    //* Dashboard
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::resource('entries', EntryController::class);
        Route::resource('users', UserController::class);
    });
});

//! RUTAS PARA VERIFICACIÓN DE CUENTA
//* Ruta para redireccionar a la vista informativa: "Verifica tu correo electrónico"
Route::get('/email/verify', fn() => view('auth.verify-email'))
    ->middleware('auth')
    ->name('verification.notice');

//* Ruta a la que nos redirigimos cuando la cuanta a sido verificada
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

//* Ruta que envia el correo de verificación
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
