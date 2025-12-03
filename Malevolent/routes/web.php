<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Plutonium\LanguageController;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('homepage'); })->name('Homepage');;

Route::get('/search', function () { return view('search'); })->name('Search');;

Route::get('/login', function () { return view('login'); })->name('Login');;
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', function () { return view('register'); })->name('Register');;
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/profile', function () { return view('profile'); })->name('Profile');;
Route::get('/account', function () { return view('account'); })->name('Account');;

Route::post('/api/language', [LanguageController::class, 'handle'])->name('api.language')->withoutMiddleware([StartSession::class]);
