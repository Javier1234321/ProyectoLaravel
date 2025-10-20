<?php

use Illuminate\Support\Facades\Route;

Route::get('/principal', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function(){
    return redirect()->route('home') ;
});

Route:: get('/contactanos', function(){
    return view('contacto');
})->name('contact');