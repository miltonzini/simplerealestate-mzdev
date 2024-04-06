<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/properties', function () {
    return view('properties');
})->name('properties');

Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('property');