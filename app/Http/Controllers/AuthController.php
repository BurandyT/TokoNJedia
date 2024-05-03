<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function showRegistgerForm()
    {
        return view('register');
    }
}
