<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('Login/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'Username' => 'required|Username',
            'Password' => 'required'
        ]);

        $credentials = $request->only('Username', 'Password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('Login/login');
    }
}
