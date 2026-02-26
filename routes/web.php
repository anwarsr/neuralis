<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'pages.home')->name('home');
Route::view('/fitur', 'pages.fitur')->name('fitur');
Route::view('/tentang', 'pages.tentang')->name('tentang');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/kontak', 'pages.kontak')->name('kontak');
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');
