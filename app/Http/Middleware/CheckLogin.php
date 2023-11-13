<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('loginAdmin')) {
            $active = $request->session()->get('loginAdmin');
            // dd($active);
            return redirect(route('login'));
        }else{
            if(Str::contains($request->path(),'login')){
                return redirect(route('getlist'));
            }
            return $next($request);
        }
        
    }
}
