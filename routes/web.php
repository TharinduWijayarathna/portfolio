<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
})->name('home');

require __DIR__.'/auth.php';
