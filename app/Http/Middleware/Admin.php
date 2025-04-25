<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // Redirect to login if the user is not authenticated
            return redirect()->route('login');
        }

        // Check if the authenticated user is an admin
        if (Auth::user()->usertype == 'admin') {
            return $next($request);
        }

        // Abort with a 401 error if the user is authenticated but not an admin
        abort(401);
    }
}
