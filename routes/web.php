<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact-us');
Route::get('/contract', [PageController::class, 'contract'])->name('contract');
Route::get('/transfer', [PageController::class, 'transfer'])->name('transfer');
Route::get('/complaints', [PageController::class, 'complaints'])->name('complaints');

Route::get('/insurance/company', [PageController::class, 'companyInsurance'])->name('insurance.company');
Route::get('/insurance/property-and-liability', [PageController::class, 'propertyAndLiability'])->name('insurance.property-and-liability');
Route::get('/insurance/cargo', [PageController::class, 'cargoInsurance'])->name('insurance.cargo');
Route::get('/insurance/life', [PageController::class, 'lifeInsurance'])->name('insurance.life');
Route::get('/insurance/liability', [PageController::class, 'liabilityInsurance'])->name('insurance.liability');

Route::get('/insurance/condominium', [PageController::class, 'condominiumInsurance'])->name('insurance.condominium');
Route::get('/insurance/agriculture', [PageController::class, 'agricultureInsurance'])->name('insurance.agriculture');

Route::get('/quote/sent/{type}', [PageController::class, 'quoteSent'])->name('quote.sent');


Route::get('/locale/{locale}', [LocaleController::class, 'update'])->name('locale.set');

Route::fallback([PageController::class, 'fallback']);
