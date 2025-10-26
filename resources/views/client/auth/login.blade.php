@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <form method="POST" action="{{ route('client.login') }}" class="bg-white p-6 rounded-lg shadow-xl max-w-md mx-auto">
        @csrf

        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Client Login</h2>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" required autofocus 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
            @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
            <input type="password" id="password" name="password" required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
            @error('password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="remember" class="form-checkbox text-black rounded">
                <span class="ml-2 text-sm text-gray-600">Remember Me</span>
            </label>
        </div>

        <button type="submit" class="w-full bg-black text-white p-3 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50 transition duration-150">
            Log In
        </button>
        
        <p class="text-center text-sm mt-4 text-gray-600">
            Don't have an account? 
            <a href="{{ route('client.register') }}" class="text-black hover:underline font-medium">Register here</a>
        </p>
    </form>

@endsection