<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User_role;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = User_role::where('userid',Auth::user()->id)->first();
                if (Auth::user() && $role->roleid==1){
                     return redirect('/admin');
                } elseif ($role && $role->roleid == 2) {
                    return redirect('/user');
                } else {
                    // Handle cases where the role is not found or invalid
                    return redirect('/login'); // Redirect to a default page or handle accordingly
                }
            }
        }

        return $next($request);
    }
}
