<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        /*
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
        */
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->remember;
 
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password'],'delete_flag' => 0], $remember)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('dashboard', absolute: false));
        }
        if (Auth::viaRemember()) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('dashboard', absolute: false));
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records or The account is not active.',
        ])->onlyInput('email');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
