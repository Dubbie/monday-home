<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function update(Request $request, string $newLocale)
    {
        if (!in_array($newLocale, config('app.available_locales'))) {
            return redirect(url()->previous());
        }

        App::setLocale($newLocale);

        $request->session()->put('locale', $newLocale);

        return redirect(url()->previous());
    }
}
