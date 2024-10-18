<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', [ PagesController::class, 'dashboard']);