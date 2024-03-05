<?php

use App\Http\Controllers\StefanController;
use App\Http\Controllers\ElevController;
use Illuminate\Support\Facades\Route;
use ErlandMuchasaj\LaravelFileUploader\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Route::get('/', [StefanController::class, 'home'])->name('home');

Route::get('/contacts', [StefanController::class, 'contacts'])->name('contacts');

Route::get('/about',[StefanController::class, 'about'])->name('about');

Route::get('/elevi',[ElevController::class, 'showElevi'])->name('elevi');

Route::resource('articles', 'App\Http\Controllers\ArticleController');

Route::get('/files', function (Request $request) {
    return view('pages.files');
})->name('files');

Route::post('/files', function (Request $request) {

    $max_size = (int) ini_get('upload_max_filesize') * 1000;

    $extensions = implode(',', FileUploader::images());

    $request->validate([
        'file' => [
            'required',
            'file',
            'image',
            'mimes:' . $extensions,
            'max:'.$max_size,
        ]
    ]);

    $file = $request->file('file');

    $response = FileUploader::store($file);

    return redirect()
            ->back()
            ->with('success','File has been uploaded.')
            ->with('file', $response);
})->name('files.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
