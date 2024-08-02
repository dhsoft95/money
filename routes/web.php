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
