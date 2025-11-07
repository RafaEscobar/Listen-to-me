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
            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return $th->getMessage();
        }
    }
}
