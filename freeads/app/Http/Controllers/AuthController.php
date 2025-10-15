<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Formulaire d'inscription
    public function showRegister()
    {
        return view('auth.register');
    }

    // Traitement d'inscription
    public function register(Request $request)
    {
        $request->validate([
            'login' => 'required|string|unique:users,login',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'nullable|string',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'login' => $request->login,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Bienvenue sur Freeads !');
    }

    // Formulaire de connexion
    public function showLogin()
    {
        return view('auth.login');
    }

    // Traitement de connexion
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'login' => 'Identifiants incorrects.',
        ]);
    }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form')->with('success', 'Déconnexion réussie.');
    }
}
