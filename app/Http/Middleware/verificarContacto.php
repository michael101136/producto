<?php

namespace App\Http\Middleware;

use Closure;

class verificarContacto
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
        
        if(false)
        {
                    return $next($request);

        }

        return response('No pudes continuar',404);
    }
}
