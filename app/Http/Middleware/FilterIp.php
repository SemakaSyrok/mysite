<?php

namespace App\Http\Middleware;

use Closure;

class FilterIp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $badIP = \App\BadIp::where('ip', $request->ip())->get();

        if($badIP->isNotEmpty()) return abort(404);

        return $next($request);
    }
}
