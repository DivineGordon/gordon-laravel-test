<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Auth | @yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-gray-100 antialiased">
    
    <div class="min-h-screen flex items-center justify-center">
        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>