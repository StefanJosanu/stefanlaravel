<?php

use App\Http\Controllers\StefanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StefanController::class, 'home'])->name('home');

Route::get('/contacts', [StefanController::class, 'contacts'])->name('contacts');

Route::get('/about',[StefanController::class, 'about'])->name('about');
