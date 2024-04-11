<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::webhooks('webhook-receiving-url');
Route::webhooks('webhook-receiving-url', 'default', 'get');
