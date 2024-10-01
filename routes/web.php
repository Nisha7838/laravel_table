<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::middleware(['auth'])->group(function () {
    Route::get('/index', [LoginController::class, 'index'])->name('index');
    
});


Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name("register");
Route::get('/api/states/{countryId}', [RegisterController::class, 'getStates']);
Route::get('/api/cities/{stateId}', [RegisterController::class, 'getCities']);
