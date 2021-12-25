<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoadTheme
{
    public function handle(Request $request, Closure $next, $theme = 'light')
    {
        return $next($request);
    }
}
