<?php

use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

use Inertia\Inertia;
use App\Http\Controllers\NativeFeatureController;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/features', function () {
    return Inertia::render('Features');
});

Route::post('/native/vibrate', [NativeFeatureController::class, 'vibrate']);
Route::post('/native/notify', [NativeFeatureController::class, 'notify']);
