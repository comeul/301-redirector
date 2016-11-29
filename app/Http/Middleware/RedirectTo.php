<?php

namespace App\Http\Middleware;

use Closure;

class RedirectTo
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
        $requestTo = env('REDIRECT_TO');
        $redirectTo = $request->path() == "/" ? $requestTo : $requestTo."/{$request->path()}";
        
        return redirect()->secure($redirectTo, 301);

        // return $next($request);
    }
}
