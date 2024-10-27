<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PageController extends Controller
{
    public function aboutUs()
    {
        return Inertia::render('AboutUs');
    }

    public function services()
    {
        return Inertia::render('Services');
    }

    public function contact()
    {
        return Inertia::render('ContactUs');
    }

    public function contract()
    {
        return Inertia::render('Contract');
    }

    public function transfer()
    {
        return Inertia::render('Transfer');
    }

    public function companyInsurance()
    {
        return Inertia::render('Insurance/Company');
    }

    public function propertyAndLiability()
    {
        return Inertia::render('Insurance/PropertyAndLiability');
    }

    public function cargoInsurance()
    {
        return Inertia::render('Insurance/Cargo');
    }

    public function lifeInsurance()
    {
        return Inertia::render('Insurance/Life');
    }

    public function liabilityInsurance()
    {
        return Inertia::render('Insurance/Liability');
    }

    public function condominiumInusrance()
    {
        return Inertia::render('Insurance/Condominium');
    }
}
