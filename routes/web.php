<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any?}', function () {
    return response()->file(public_path('index.html'));
})->where('any', '^(?!api|das).*$');

Route::get('/das/{any?}', function () {
    return response()->file(public_path('das/index.html'));
})->where('any', '.*');
