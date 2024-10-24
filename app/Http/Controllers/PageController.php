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
}
