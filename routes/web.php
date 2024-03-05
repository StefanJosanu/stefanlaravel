<?php

use App\Http\Controllers\StefanController;
use App\Http\Controllers\ElevController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StefanController::class, 'home'])->name('home');

Route::get('/contacts', [StefanController::class, 'contacts'])->name('contacts');

Route::get('/about',[StefanController::class, 'about'])->name('about');

Route::get('/elevi',[ElevController::class, 'showElevi'])->name('elevi');

Route::resource('articles', 'App\Http\Controllers\ArticleController');
