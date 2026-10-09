<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

Route::get('/', function () {
    $data = [
        'judul' => 'Selamat Datang',
        'deskripsi' => 'Ini adalah website Laravel pertama saya.',
        'fitur' => ['Routing', 'Blade Template', 'MVC', 'Eloquent ORM']
    ];
    return view('welcome', compact('data'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello/{nama}', function ($nama) {
    return view('hello', compact('nama'));
});

Route::get('/artikels', [ArtikelController::class, 'index']);