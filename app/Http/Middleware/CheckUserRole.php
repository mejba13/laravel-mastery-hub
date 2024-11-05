<?php

// app/Http/Middleware/CheckUserRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Ensure user is authenticated
        if (!Auth::check()) {
            return redirect('/login'); // Redirect if not logged in
        }

        // Check if user has the required role
        if (Auth::user()->role !== $role) {
            return redirect('/dashboard')->with('error', 'Access denied.');
        }

        return $next($request);
    }
}
