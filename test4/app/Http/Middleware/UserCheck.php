<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
     $user=auth()->user();
     if($user->role=="admin"){
        dd("admin");
         return redirect()->route('admin');
        }
        else if($user->role=="Subadmin"){
        dd("subadmin");

            return redirect()->route('subadmin');
        }
        dd("user");
        
        return $next($request);
    }
}
