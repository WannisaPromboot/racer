<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class loginfrontend
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
        if (!empty(Session::get('customer_id'))) {
            return $next($request);
        }else{
            return redirect('/login-customer');
        }
    }
    
}
