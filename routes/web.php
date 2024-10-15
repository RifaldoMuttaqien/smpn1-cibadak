<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::resource('/admin-kontak', \App\Http\Controllers\BackEnd\KontakController::class);
Route::resource('/kontak', \App\Http\Controllers\FrontEnd\KontakController::class);
Route::resource('/ekstrakulikuler', \App\Http\Controllers\FrontEnd\EskulController::class);
Route::resource('/eskul', \App\Http\Controllers\BackEnd\EkstrakulikulerController::class);
Route::resource('welcome', \App\Http\Controllers\FrontEnd\WelcomeuController::class);
Route::resource('/guru', \App\Http\Controllers\BackEnd\GuruController::class);
Route::resource('/teachers', \App\Http\Controllers\FrontEnd\GuruController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
