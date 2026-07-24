<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $loginType = filter_var($request->login, FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'username';

        if (Auth::attempt([
            $loginType => $request->login,
            'password' => $request->password
        ])) {

            $request->session()->regenerate();

            if (Auth::user()->username == 'pengadaan') {
                return redirect()->route('home');
            }

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Login gagal, cek kembali data');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
