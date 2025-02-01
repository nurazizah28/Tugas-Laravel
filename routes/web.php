<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GenreController,
    CastController,
};

Route::get('/iniagan', function () {
    return view('agan');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/2', function () {
    return view('index2');
});

// route buat nambahin genre
// handler = create
//PER GENRE-GENRE AN
Route::controller(GenreController::class)->group(function () {
    Route::get('/genre', 'index')->name('genre.index');
    Route::get('/genre/create', 'create')->name('genre.create');
    Route::post('/genre', 'store')->name('genre.store');
    Route::get('/genre/{id}/edit', 'edit')->name('genre.edit');
    Route::put('/genre/{id}', 'update')->name('genre.update');
    Route::delete('/genre/{id}', 'destroy')->name('genre.destroy');
});

// CAST
Route::controller(CastController::class)->group(function () {
    Route::get('/cast','index')->name('cast.index');
    Route::get('/cast/create','create')->name('cast.create');
    Route::post('/cast','store')->name('cast.store');
    Route::get('/cast/{id}/edit','edit')->name('cast.edit');
    Route::put('/cast/{id}','update')->name('cast.update');
    Route::delete('/cast/{id}','destroy')->name('cast.destroy');
});