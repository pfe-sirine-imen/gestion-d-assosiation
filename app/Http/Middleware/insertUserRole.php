<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class insertUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next ,string $role)
    {
        /*if(Auth::check()){
            
            if(Auth::user()->role == $role){
                return $next($request);
            }else{
                return redirect('/assosiation')->with('message','Acces you are note user');
            }

        }else{
            return redirect('/login')->with('message','login to acces website');
        }*/
        return $next($request);
        
    }
}
