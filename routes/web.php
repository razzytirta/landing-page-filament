<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'index'])->name('landing-paage');

Route::resource('guest-book', 'App\Http\Controllers\GuestBookController')
    ->only(['index', 'create', 'store']);
