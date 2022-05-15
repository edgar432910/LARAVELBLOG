<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAge
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
        
        


        
        if(empty(auth()->user()->email)){
            return  redirect()->route('inicio');
        }
        else{
            $a=auth()->user()->email;
            
            if($a=="percycoronel@gmail.com" || $a=="admin@hotmail.com"){
                return $next($request);
            }else{
                return  redirect()->route('prosperamente');
            }
        }
        
        
       

       // return $next($request);
    }
}
