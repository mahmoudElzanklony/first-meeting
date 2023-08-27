<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class ControlPanel
{
    
    public function handle($request, Closure $next)
    {
        // check if user if authenticated
        if(Auth::check()){
            // he is authenticated
            // check if [admin|employee] guard is available
            
            if(Auth::guard('admin')->check()){
                // redirect him to dashboard
               return $next($request);
            }else{
                return redirect('/controlpanel/login');
            }
        }else{
            // he is unauthenticated
            return redirect('/auth/login');
        }

        
    }
}
