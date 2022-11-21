<?php

namespace App\Http\Middleware;

use Closure;
    use Exception;

class HandelError
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
        try {
                    return $next($request);

        } catch (Exception $e) {
            return response()->view('errors.error');
            
        }
    }
}
