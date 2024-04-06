<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/property', function () {
    return view('property');
})->name('property');

Route::get('/properties', function () {
    return view('properties');
})->name('properties');
