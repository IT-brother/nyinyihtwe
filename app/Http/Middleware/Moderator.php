<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Moderator
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
        if(Auth::check())
        {
            if(Auth::user()->roles->name == "moderator")//Moderator
            {
                return $next($request);
            }
        }
        return redirect("/")->with("error","Error occurred!");
    }
}
