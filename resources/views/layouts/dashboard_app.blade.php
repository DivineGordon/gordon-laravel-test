<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Dashboard | @yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('scripts')
</head>
<body class="bg-gray-50 font-sans antialiased">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-black">WOW Logbook</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('client.dashboard') }}" class="text-black font-semibold hover:text-gray-600">Dashboard</a>
                    <a href="#" class="text-black hover:text-gray-600">Analytics</a>
                    <a href="#" class="text-black hover:text-gray-600">Editor</a>
                    
                    <form method="POST" action="{{ route('client.logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-sm transition duration-150">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    
    <main class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>
</body>
</html>