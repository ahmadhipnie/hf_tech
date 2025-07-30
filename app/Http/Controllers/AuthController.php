<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {


            Alert::success('Login Berhasil', 'Selamat datang di halaman admin!');
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        Alert::error('Login Gagal', 'Email atau password salah!');
        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        Alert::success('Logout Berhasil', 'Anda telah berhasil keluar dari halaman admin!');
        return redirect()->route('landing.index');
    }
}
