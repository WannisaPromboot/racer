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
    public function handle($request, Closure $next,...$list)
    {

        if(!empty(Session::get('admin_id'))){
            $auth_role = Session::get('admin_status');
            $result = in_array($auth_role, $list);
            
            if(!$result){
                abort(404);
            }else{
                return $next($request);
            }
        }else{
            return redirect('admin');
        }
  
       
    }
}
