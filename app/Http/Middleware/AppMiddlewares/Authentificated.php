<?php

namespace App\Http\Middleware\AppMiddlewares;

use Closure;
use Illuminate\Http\Request;

class Authentificated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()){
            return $next($request);
        }else{
            return redirect()->to('/');
        }

    }
}
