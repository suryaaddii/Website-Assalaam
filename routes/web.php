<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('beranda');
});
Route::get('membership', function () {
    return view('membership');
});
Route::get('about', function () {
    return view('about');
});
Route::get('mitra', function () {
    return view('mitra');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('formpage', function () {
    return view('formpage');
});


// routes/web.php


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

