<?php

// app/Http/Controllers/ClientDashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    // Ensure this method exists and returns the view
    public function index()
    {
        return view('client.dashboard');
    }
}
