<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class);

Route::resource('/about', AboutController::class);

Route::resource('/contact', ContactController::class);

Route::resource('/artikel', ArtikelController::class );