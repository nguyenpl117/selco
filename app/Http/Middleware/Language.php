<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Language
{

    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1) === 'en' ? 'en' : 'vi';
        App::setLocale($locale);

        // Lưu locale vào request để dùng trong route
        request()->attributes->set('lang_locale', $locale);

        return $next($request);
    }
}