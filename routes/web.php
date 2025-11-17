<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AwsDataController;

// Home Page
Route::get('/', [PageController::class, 'home'])->name('home');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Team Page
Route::get('/team', [PageController::class, 'team'])->name('team');

// Technology Page
Route::get('/technology', [PageController::class, 'technology'])->name('technology');

// Contact Page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Contact Form Submission
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/api/sensor-data', [DashboardController::class, 'getSensorData'])->name('api.sensor-data')->middleware('auth');

// AWS Sensor Data Route
Route::get('/sensor-data', [AwsDataController::class, 'getSensorData']);
Route::get('/api/sensor-data', [DashboardController::class, 'getSensorData'])->name('api.sensor-data');
