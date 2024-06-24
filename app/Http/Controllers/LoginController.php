<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        // Logging for debugging
        Log::info('Attempting login', ['email' => $credentials['email']]);

        if (Auth::attempt($credentials)) {
            Log::info('Login successful', ['email' => $credentials['email']]);
            return redirect()->route('home');
        } else {
            Log::warning('Login failed', ['email' => $credentials['email']]);
            return redirect()->back()->with('error', 'These credentials do not match our records.');
        }
    }

    public function postlogin(){
        return view('admin.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
