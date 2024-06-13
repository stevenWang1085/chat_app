<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/chat/normal', function () {
    return view('chat_normal');
})->name('chat_normal');
