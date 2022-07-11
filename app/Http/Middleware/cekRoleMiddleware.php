<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekRoleMiddleware
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
        $roles = array_slice(func_get_args(), 2);
        // dd($roles);

            foreach ($roles as $role) { 
                $user = \Auth::user()->role;
                if( $user == $role){
                    return $next($request);
                }
            }
            return abort(403);
    }     
}
