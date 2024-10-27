<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectOldUrls
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $newRoute = $this->resolveRedirect($request->path());

        if ($newRoute) {
            return redirect(route($newRoute), Response::HTTP_PERMANENTLY_REDIRECT);
        }

        return $next($request);
    }

    private function resolveRedirect(string $path): ?string
    {
        $redirects = config('redirects');
        return $redirects[$path] ?? null;
    }
}
