<?php

namespace App\Http\Controllers\ClientAuth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientRegisterController extends Controller
{
    // Shows the client registration form view
    public function showRegistrationForm()
    {
        // Corresponds to the Required View: Client login/registration [cite: 50]
        return view('client.auth.register');
    }

    // Handles the client registration request
    public function register(Request $request)
    {
        // 1. Validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // 2. Client Creation
        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // Create a URL-friendly slug for SEO-friendly URLs (e.g., /page/{client-slug}) 
            'slug' => Str::slug($request->name) . '-' . Str::random(6),
            'role' => 'client', // Default role for new registrations
        ]);

        // 3. Authentication
        // Log the client in immediately using the 'client' guard 
        Auth::guard('client')->login($client);

        // 4. Redirection
        // Redirect to the client dashboard after successful registration 
        return redirect()->route('client.dashboard');
    }
}