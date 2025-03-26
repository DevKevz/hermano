<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

// Corrected Routes
Route::get('/', function () {
    return view('splash'); // Redirects to splash page
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/store', function () {
    return view('store');
})->name('store');

Route::get('/ourstory', function () {
    return view('ourstory');
})->name('ourstory');;

// Authentication routes
Auth::routes();

// Admin routes with middleware protection
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

