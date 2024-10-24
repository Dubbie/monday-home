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
}
