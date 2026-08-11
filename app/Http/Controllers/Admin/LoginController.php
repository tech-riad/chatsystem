<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // dd($credentials);
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->hasRole('admin')) {
                // dd('user');
                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->hasRole('user')) {

            // dd('user');
                return redirect()->route('user.dashboard');
            }
        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
