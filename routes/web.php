<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact-us');
Route::get('/contract', [PageController::class, 'contract'])->name('contract');


Route::get('/locale/{locale}', [LocaleController::class, 'update'])->name('locale.set');
