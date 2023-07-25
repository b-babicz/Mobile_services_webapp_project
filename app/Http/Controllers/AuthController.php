<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function user()
    {
        return view('user');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::check() && Auth::user()->role_id != 3) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('user');
            }
        }

        return back()->withErrors([
            'email' => 'Podany email nie figuruje w naszej bazie danych',
            'password' => 'Podane hasło jest nieprawidłowe',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

