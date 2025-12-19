<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/migrate', function () {
    \Artisan::call('migrate', [
        '--seed' => true,
    ]);
    return 'Database migrated and seeded!';
});