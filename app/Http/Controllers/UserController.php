<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {
            if (Auth::attempt($request->validated())) {
                return redirect()->route('dashboard');
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function store(RegisterRequest $request)
    {
        try {
            // crear usuario (asegúrate que el password se guarde hasheado)
            $user = User::create($request->validated());
            // iniciar sesión
            Auth::login($user);
            // disparar evento para que Laravel envíe la notificación de verificación
            event(new Registered($user));
            // redirigir a la página que le indica al usuario que revise su email
            return redirect()->route('verification.notice');
        } catch (\Throwable $th) {
            // mejor devolver un back con error, no el mensaje crudo
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }
}
