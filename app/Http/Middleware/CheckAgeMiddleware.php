<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // xu ly logic request truoc khi next
        $birthday = $request->get('birthday');
        $age = Carbon::parse($birthday)->age;
        if ($age < 18) {
            return back();
        }

        return $next($request);
    }
}
