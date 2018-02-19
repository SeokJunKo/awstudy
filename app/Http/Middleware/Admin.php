<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin
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
        if(! Auth::check()){
           return redirect('/login'); 
        } else {
            if(Auth::user()->groupid == 1){
                return $next($request);
            }
            return redirect('/user');
        }
    }
}
