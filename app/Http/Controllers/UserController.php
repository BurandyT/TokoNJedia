<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'email' => [
                'required',
                'email',
                'unique:users',
                'ends_with:.com',
                'not_regex:/^\.com/',
            ],
            'password' => 'required|min:5|max:20|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'username' => 'required|unique:users',
        ]);

        $user = new User([
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'username' => $validatedData['username'],
            'image' => 'assets/images/logo/user.png'
        ]);

        $user->save();

        return redirect('/login')->with('success', 'User registered successfully! Please log in.');

    }
}
