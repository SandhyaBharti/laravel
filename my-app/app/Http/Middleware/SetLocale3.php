<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale3
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = session('locale');

        if (in_array($locale, ['en', 'hi', 'pa'])) {
            App::setLocale($locale);
        } else {
            App::setLocale('en');
        }

        return $next($request);
    }
}
