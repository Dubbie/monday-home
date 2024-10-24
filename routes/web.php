<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact-us');
Route::get('/contract', [PageController::class, 'contract'])->name('contract');
Route::get('/transfer', [PageController::class, 'transfer'])->name('transfer');

Route::get('/company-insurance', [PageController::class, 'companyInsurance'])->name('company-insurance');
Route::get('/property-and-liability-insurance', [PageController::class, 'propertyAndLiability'])->name('property-and-liability-insurance');


Route::get('/locale/{locale}', [LocaleController::class, 'update'])->name('locale.set');
