<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/dashboard', [ PagesController::class, 'dashboard']);

Route::get('/register', function () {
    return view('register'); // trang 'register.blade.php' sẽ được hiển thị
})->name('register');
