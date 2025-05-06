<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/cgu', 'cgu')->name('cgu');

Route::view('/mentions-legales', 'mentions')->name('mentions');

Route::view('/contact', 'contact')->name('contact');

Route::view('/covoiturage', 'covoiturage')->name('covoiturage');