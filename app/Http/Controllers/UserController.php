<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
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
            User::create($request->validated());
            return redirect()->route('login');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
