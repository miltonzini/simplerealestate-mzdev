<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertiesController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::get('/properties', [PropertiesController::class, 'index'])->name('properties');

Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('property');




// TEST ROUTES

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

