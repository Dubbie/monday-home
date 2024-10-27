<?php

use App\Http\Controllers\Api\NoticeController;
use App\Http\Controllers\Api\QuoteController;
use Illuminate\Support\Facades\Route;

Route::post('/notice/read', [NoticeController::class, 'read'])->name('api.notice.read');

// Quotes
Route::group([
    'prefix' => 'quote'
], function () {
    Route::post('/insurance/company', [QuoteController::class, 'sendCompanyInsuranceQuote'])->name('api.quote.company');
    Route::post('/insurance/property-and-liability', [QuoteController::class, 'sendPropertyAndLiabilityInsuranceQuote'])->name('api.quote.property-and-liability');
    Route::post('/insurance/cargo', [QuoteController::class, 'sendCargoInsuranceQuote'])->name('api.quote.cargo');
    Route::post('/insurance/life', [QuoteController::class, 'sendLifeInsuranceQuote'])->name('api.quote.life');
    Route::post('/insurance/liability', [QuoteController::class, 'sendLiabilityInsuranceQuote'])->name('api.quote.liability');
    Route::post('/insurance/condominium', [QuoteController::class, 'sendCondominiumInsuranceQuote'])->name('api.quote.condominium');
    Route::post('/insurance/agriculture', [QuoteController::class, 'sendAgricultureInsuranceQuote'])->name('api.quote.agriculture');
});
