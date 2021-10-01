<?php

namespace Theobros\SetTimezone\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetTimezoneMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $timezone = $request->filled('timezone') ? $request->timezone : 'UTC';
        $request->merge(['timezone' => $timezone]);
        return $next($request);
    }
}
