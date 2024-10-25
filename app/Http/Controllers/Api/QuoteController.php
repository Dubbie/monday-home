<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyInsuranceQuoteRequest;
use App\Services\QuoteService;

class QuoteController extends Controller
{
    public function sendCompanyInsuranceQuote(CompanyInsuranceQuoteRequest $request)
    {
        $data = $request->validated();

        return QuoteService::handleNewQuoteSubmission(QuoteService::COMPANY_INSURANCE, $data);
    }
}
