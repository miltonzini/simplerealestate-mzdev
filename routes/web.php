<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertiesController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/properties', [PropertiesController::class, 'index'])->name('properties');

Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('property');


// test routes

// Route::get('/test', function(){
//     return "test";
// })->name('test');

Route::get('/test/{string?}', function($string = 'default string'){
    return "String: '" . $string . "'";
})->name('test-string');


Route::get('/test-view', function(){
    $name = 'Ana';
    $lastName = 'Díaz';
    $age = 'Ana';
    // $surname = 'Díaz';
    return view('test-view')->with([
        'name' => $name,
        'lastName' => $lastName,
        'age' => $age
    ]);

})->name('test-view');

