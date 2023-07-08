<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return response()->json('Login');
    }

    public function register() {
        return response()->json('Register');
    }

    public function logout() {
        return response()->json('Logout');
    }
}
