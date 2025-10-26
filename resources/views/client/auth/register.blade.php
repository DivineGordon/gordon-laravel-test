@extends('layouts.app')

@section('title', 'Register')

@section('content')


<form method="POST" action="{{ route('client.register') }}" class="bg-white p-6 rounded-lg shadow-xl max-w-md mx-auto mt-10">
    @csrf

    <h2 class="text-2xl font-bold text-gray-800 mb-6">Client Registration</h2>

    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Name</label>
        <input type="text" id="name" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
        @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
        <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
        @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
    </div>

    <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
        <input type="password" id="password" name="password" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
        @error('password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
    </div>
    
    <div class="mb-6">
        <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
    </div>

    <button type="submit" class="w-full bg-black text-white p-3 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-black focus:ring-opacity-50 transition duration-150">
        Register Client
    </button>
</form>


@endsection