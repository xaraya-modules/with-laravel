<?php

use Illuminate\Support\Facades\Route;

// default webhooks support POST requests
Route::webhooks('/hello-laravel');
// add support of GET/HEAD requests for live checks (optional)
Route::webhooks('/hello-laravel', 'default', 'get');
