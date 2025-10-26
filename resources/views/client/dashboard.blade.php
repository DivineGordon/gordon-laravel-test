@extends('layouts.dashboard_app')

@section('title', 'Overview')

@section('content')

    <header class="mb-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">
            Welcome, {{ Auth::guard('client')->user()->name }}!
        </h1>
        <p class="text-gray-600 mt-1">
            Manage your page customizations and view your site's performance.
        </p>
    </header>

    <div class="bg-white shadow-lg sm:rounded-lg p-6 mb-8 border-l-4 border-black">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-xl font-semibold text-gray-800">Customize Your Page</h3>
                <p class="text-gray-600 mt-1">
                    [cite_start]Edit text content and select from predefined color themes for your unique page[cite: 16, 17].
                </p>
            </div>
            <a href="#" class="bg-black text-white hover:bg-gray-800 font-bold py-2 px-4 rounded transition duration-150 shadow-md">
                Go to Page Editor
            </a>
        </div>
    </div>
    
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Site Analytics Overview</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        
        <div class="bg-white overflow-hidden shadow sm:rounded-lg p-5">
            <p class="text-sm font-medium text-gray-500 truncate">Total Page Views (30 Days)</p>
            <div class="mt-1 text-3xl font-semibold text-gray-900">
                0,000 </div>
        </div>

        <div class="bg-white overflow-hidden shadow sm:rounded-lg p-5">
            <p class="text-sm font-medium text-gray-500 truncate">Unique Visitors (30 Days)</p>
            <div class="mt-1 text-3xl font-semibold text-gray-900">
                0,000 </div>
        </div>

        <div class="bg-white overflow-hidden shadow sm:rounded-lg p-5">
            <p class="text-sm font-medium text-gray-500 truncate">Returning Visitors (%)</p>
            <div class="mt-1 text-3xl font-semibold text-gray-900">
                0.0% </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Daily Views Trend</h3>
            <div class="h-64 bg-gray-100 flex items-center justify-center rounded text-gray-500">
                Placeholder for Chart.js Daily View Chart
            </div>
        </div>

        <div class="bg-white shadow sm:rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Unique vs. Returning Visitors</h3>
            <div class="h-64 bg-gray-100 flex items-center justify-center rounded text-gray-500">
                Placeholder for Chart.js Visitor Breakdown Chart
            </div>
        </div>
    </div>

    <div class="text-center mt-8">
        <a href="#" class="text-black hover:text-gray-700 font-medium border-b border-black hover:border-gray-700 pb-1">
            View Full Analytics Reports & Export Data (CSV) &rarr;
        </a>
    </div>

@endsection