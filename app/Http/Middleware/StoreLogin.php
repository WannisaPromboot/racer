<?php

namespace App\Http\Middleware;
use Illuminate\Session\Middleware\StartSession;
use Closure;
use Session;

class StoreLogin
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
        // return app(StartSession::class)->handle($request, function ($request) use ($next) {

            if (!empty(Session::get('storeuser_id'))) {
                return $next($request);
            }else{
                return redirect('login_store');
            }
        // });
       
    }
}
