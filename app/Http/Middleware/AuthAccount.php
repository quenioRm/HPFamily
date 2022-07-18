<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ips = explode(";", env('ADMINIP'));
        $check = false;

        foreach ($ips as $ip) {
           if($request->getClientIp() == $ip){
                $check = true;
           }
        }

        if($check == false){
            abort(403);
        }else{
            return $next($request);
        }
    }
}
