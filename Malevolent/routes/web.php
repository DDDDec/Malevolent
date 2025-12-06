<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Plutonium\LanguageController;
use App\Models\User\User;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('homepage'); })->name('Homepage');;
Route::get('/terms-of-service', function () { return view('terms'); })->name('Terms Of Service');;
Route::get('/privacy-policy', function () { return view('privacy'); })->name('Privacy Policy');;

Route::get('/leaderboard/rounds', function () { return view('rounds'); })->name('Round Leaderboards');;
Route::get('/leaderboard/stats', function () { return view('stats'); })->name('Stats Leaderboards');;
Route::get('/leaderboard/servers', function () { return view('servers'); })->name('Server Leaderboards');;
Route::get('/search', function () { return view('search'); })->name('Search');;

Route::get('/tickets', function () { return view('tickets'); })->name('Support Tickets');;
Route::get('/commands', function () { return view('commands'); })->name('Command Booklet');;
Route::get('/guides', function () { return view('guides'); })->name('Server Guides');;

Route::get('/ranks', function () { return view('ranks'); })->name('Player Ranks');;
Route::get('/colors', function () { return view('colors'); })->name('Username Colors');;
Route::get('/refund-policy', function () { return view('refunds'); })->name('Refunds Policy');;

Route::get('/login', function () { return view('login'); })->name('Login');;
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', function () { return view('register'); })->name('Register');;
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/forgot', function () { return view('forgot'); })->name('Forgot Password');;

Route::get('/profile/{user:name}', function (User $user) { return view('profile', ['user' => $user]); })->name('Profile');;
Route::get('/settings', function () { return view('settings'); })->name('Settings');;

Route::withoutMiddleware(['web'])->group(function () {
    Route::post('/api/language', [LanguageController::class, 'handle']);
});
