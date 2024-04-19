<?php

use Illuminate\Support\Facades\Route;
use Xaraya\LaravelApp\Http\Controllers\CountController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/count', [CountController::class, 'show']);
