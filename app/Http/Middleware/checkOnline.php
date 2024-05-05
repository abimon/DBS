<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class checkOnline
{
    
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            $expires=Carbon::now()->addMinutes(5);
            Cache::put('is-online'.Auth::user()->id, true,$expires);
        }
        return $next($request);
    }
}
