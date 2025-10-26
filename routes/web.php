<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientAuth\ClientLoginController;
use App\Http\Controllers\ClientAuth\ClientRegisterController;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('client')->name('client.')->group(function () {
    // Registration Routes
    Route::get('/register', [ClientRegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [ClientRegisterController::class, 'register']);

    // Login Routes
    Route::get('/login', [ClientLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [ClientLoginController::class, 'login']);

    // Logout Route (POST request recommended)
    Route::post('/logout', [ClientLoginController::class, 'logout'])->name('logout');
});

// routes/web.php

// Route::middleware(['auth:client'])->prefix('client')->name('client.')->group(function () {
//     // This route is only accessible if the client is logged in via the 'client' guard
//     Route::get('/dashboard', [ClientDashboardController::class, 'index'])->name('dashboard');

//     // Add your other protected routes here (Page editor, analytics reports, etc.) [cite: 52, 54]
// });