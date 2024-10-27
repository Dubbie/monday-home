<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = '';
        if ($request->is('api/*')) {
            // Get the locale from the header
            $locale = $request->header('Accept-Language', config('app.fallback_locale'));
        } else {
            // Get the locale from the session
            $locale = $request->session()->get('locale', config('app.fallback_locale'));
        }

        // Set the locale for the app
        App::setLocale($locale);

        // Call the next middleware in the stack and return the response
        return $next($request);
    }
}
