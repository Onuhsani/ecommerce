<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "ADMIN";
    return view('welcome', compact('title'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';
