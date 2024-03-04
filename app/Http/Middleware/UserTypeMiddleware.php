<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTypeMiddleware
{
    public function handle(Request $request, Closure $next , $type)
    {
        if ($type == 'employer' && Auth::user()->user_type != 'employer') {
            abort(403, 'Unauthorized');
        }

        if ($type == 'candidate' && Auth::user()->user_type != 'candidate') {
            abort(403, 'Unauthorized');
        }

        return redirect()->route('home')->with('error', 'Acceso no autorizado.');
    }
}
