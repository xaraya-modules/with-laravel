<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// prefix all webhook routes with /webhook
Route::prefix('/webhook')->group(function () {
    // default webhooks support POST requests
    Route::webhooks('/hello-laravel');
    // add support of GET/HEAD requests for live checks (optional)
    Route::webhooks('/hello-laravel', 'default', 'get');
})->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);
