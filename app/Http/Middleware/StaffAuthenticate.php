<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class StaffAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->isStaff() || Auth::user()->isManager() || Auth::user()->isAdmin())) {
            return $next($request);
        }
        return redirect('/admin')->withInput($request->only('username'))
        ->withErrors([
            'login_error' => 'Bạn không có quyền truy cập vào trang này',
        ]);
    }
}
