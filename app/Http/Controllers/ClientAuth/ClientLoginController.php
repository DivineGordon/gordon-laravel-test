<?php

namespace App\Http\Controllers\ClientAuth;

// app/Http/Controllers/ClientAuth/ClientLoginController.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ClientLoginController extends Controller
{
    // Display the login form
    public function showLoginForm()
    {
        return view('client.auth.login'); // You'll create this view
    }

    // Handle the login attempt
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to authenticate using the 'client' guard
        if (Auth::guard('client')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            // Redirect to the client dashboard 
            return redirect()->intended(route('client.dashboard')); 
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::guard('client')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}