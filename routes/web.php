<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('help', [PagesController::class, 'help'])->name('help');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/terms', [pagesController::class, 'terms'])->name('terms');
Route::get('/privacy', [pagesController::class, 'privacy'])->name('privacy');

Route::post('/contact', [pagesController::class, 'submit'])->name('contact.submit');
