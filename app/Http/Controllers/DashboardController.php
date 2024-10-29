<?php

// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class DashboardController extends Controller
{
    public function dashboard()
{
    $user = Auth::user(); // Ambil data pengguna yang sedang login
    $currentHour = Carbon::now()->format('H'); // Mendapatkan jam dalam format 24-jam
    $currentDateTime = Carbon::now()->format('l, d F Y H:i'); // Mendapatkan tanggal dan waktu saat ini

    // Tentukan ucapan berdasarkan waktu
    if ($currentHour >= 5 && $currentHour < 12) {
        $greeting = "Selamat Pagi";
    } elseif ($currentHour >= 12 && $currentHour < 15) {
        $greeting = "Selamat Siang";
    } elseif ($currentHour >= 15 && $currentHour < 18) {
        $greeting = "Selamat Sore";
    } else {
        $greeting = "Selamat Malam";
    }

    // Mengubah nama pengguna menjadi huruf besar di awal
    $userName = ucfirst(strtolower($user->name)); // Menggunakan strtolower untuk mengubah semua huruf menjadi kecil, kemudian ucfirst untuk huruf pertama menjadi besar

    return view('dashboard', compact('user', 'greeting', 'currentDateTime', 'userName'));
}
}
