<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Editeur
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
       if(Auth::check() && Auth::user()->role->nom === 'admin' || Auth::user()->role->nom === 'webmaster' || Auth::user()->role->nom === 'editeur'){
    
            return $next($request);
        }else{
            abort(403);
        }
    }
}
