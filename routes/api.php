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
});
