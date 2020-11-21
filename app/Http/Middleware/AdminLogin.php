<?php

namespace App\Http\Middleware;

use Closure;
use Session;


class AdminLogin
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
        if (!empty(Session::get('admin_id')) && Session::get('admin_status') == 1 ) {
            return $next($request);
        }else{
            return redirect('Login_admin');
        }
    }
}
