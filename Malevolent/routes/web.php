<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('homepage'); })->name('Homepage');;

Route::get('/leaderboard/round', function () { return view('round-leaderboard'); })->name('Round Leaderboards');;
