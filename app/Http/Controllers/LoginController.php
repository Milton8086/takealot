<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        //show the login page
        return view('users.login'); // login.blade.php
    }
    // Handle user login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Use attempt() with custom username field
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('customers.create');
        }

        // Return back with error if login fails
        return back()->withErrors(['username' => 'Invalid credentials.']);
    }
    // Handle user logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}


   