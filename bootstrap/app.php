<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \App\Http\Middleware\SetLocale::class,
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
            \Spatie\CookieConsent\CookieConsentMiddleware::class,
            \App\Http\Middleware\RedirectOldUrls::class,
        ]);

        $middleware->api(append: [
            \App\Http\Middleware\SetLocale::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ]);

        $middleware->encryptCookies(except: [
            'notice_read',
            'locale'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {})->create();
