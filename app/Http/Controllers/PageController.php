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
        return Inertia::render('CompanyInsurance');
    }

    public function propertyAndLiability()
    {
        return Inertia::render('PropertyAndLiability');
    }

    public function cargoInsurance()
    {
        return Inertia::render('CargoInsurance');
    }

    public function lifeInsurance()
    {
        return Inertia::render('LifeInsurance');
    }
}
