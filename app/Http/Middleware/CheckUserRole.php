<?php

// app/Http/Middleware/CheckUserRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user is authenticated and has the correct role
        if (!Auth::check() || Auth::user()->role !== $role) {
            return redirect('/')->with('error', 'Access denied.');
        }

        // Allow the request to proceed
        return $next($request);
    }
}
