<?php

namespace App\Http\Middleware;

use Closure;

class Cros
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
        $url = ('http://localhost');
        return $next($request)
            ->header('Access-Control-Allow-Origin', $url)
            ->header('Access-Control-Allow-Methods', 'GET, POsST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Accept, X-Requested-With, Origin, Content-Type');
    }
}
