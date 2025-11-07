<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {

    }

    public function store(RegisterRequest $request)
    {
        try {
            User::create($request->validated());
            return route('dashboard');
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()]);
        }
    }
}
