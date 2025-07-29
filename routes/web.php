<?php

use Illuminate\Support\Facades\Route;

// ROUTE untuk halaman animasi loading (awal)
Route::get('/', function () {
    return view('loading');
});

// ROUTE untuk Home utama (dipanggil dari loading redirect JS)
Route::get('/home', function () {
    return view('Home');
});

// ROUTE lainnya tetap
Route::get('/event', function () {
    return view('Event');
});

Route::get('/gallery', function () {
    return view('Gallery');
});

Route::get('/contact', function () {
    return view('Contact');
});
