<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/migrate', function () {
    \Artisan::call('migrate', [
        '--seed' => true,
    ]);
    return 'Database migrated and seeded!';
});