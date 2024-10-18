<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/register', function () {
    return view('register'); // trang 'register.blade.php' sẽ được hiển thị
})->name('register');
