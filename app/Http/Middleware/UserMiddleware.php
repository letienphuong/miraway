<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('users')->check()){
            return redirect()->route('login')->with('error','Vui lòng đăng nhập');
        }elseif(Auth::guard('users')->user()->status == 0){
            Auth::guard('users')->logout();
            return redirect()->route('login')->with('error','Tài khoản của bạn chưa được kích hoạt');
        }
        return $next($request);
    }
}
