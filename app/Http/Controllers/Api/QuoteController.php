<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AgricultureInsuranceQuoteRequest;
use App\Http\Requests\CargoInsuranceQuoteRequest;
use App\Http\Requests\CompanyInsuranceQuoteRequest;
use App\Http\Requests\CondominiumInsuranceQuoteRequest;
use App\Http\Requests\LiabilityInsuranceQuoteRequest;
use App\Http\Requests\LifeInsuranceQuoteRequest;
use App\Http\Requests\PropertyAndLiabilityInsuranceQuoteRequest;
use App\Services\QuoteService;

class QuoteController extends Controller
{
    public function sendCompanyInsuranceQuote(CompanyInsuranceQuoteRequest $request)
    {
        $data = $request->validated();

        return QuoteService::handleNewQuoteSubmission(QuoteService::COMPANY_INSURANCE, $data);
    }

    public function sendPropertyAndLiabilityInsuranceQuote(PropertyAndLiabilityInsuranceQuoteRequest $request)
    {
        $data = $request->validated();

        return QuoteService::handleNewQuoteSubmission(QuoteService::PROPERTY_AND_LIABILITY_INSURANCE, $data);
    }

    public function sendCargoInsuranceQuote(CargoInsuranceQuoteRequest $request)
    {
        $data = $request->validated();

        return QuoteService::handleNewQuoteSubmission(QuoteService::CARGO_INSURANCE, $data);
    }

    public function sendLifeInsuranceQuote(LifeInsuranceQuoteRequest $request)
    {
        $data = $request->validated();

        return QuoteService::handleNewQuoteSubmission(QuoteService::LIFE_INSURANCE, $data);
    }

    public function sendLiabilityInsuranceQuote(LiabilityInsuranceQuoteRequest $request)
    {
        $data = $request->validated();

        return QuoteService::handleNewQuoteSubmission(QuoteService::LIABILITY_INSURANCE, $data);
    }

    public function sendCondominiumInsuranceQuote(CondominiumInsuranceQuoteRequest $request)
    {
        $data = $request->validated();

        return QuoteService::handleNewQuoteSubmission(QuoteService::LIABILITY_INSURANCE, $data);
    }

    public function sendAgricultureInsuranceQuote(AgricultureInsuranceQuoteRequest $request)
    {
        $data = $request->validated();

        return QuoteService::handleNewQuoteSubmission(QuoteService::AGRICULTURAL_INSURANCE, $data);
    }
}
