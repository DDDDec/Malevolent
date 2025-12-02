<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('homepage'); })->name('Homepage');;

Route::get('/login', function () { return view('login'); })->name('Login');;
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', function () { return view('register'); })->name('Register');;
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
