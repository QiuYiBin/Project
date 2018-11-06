<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $request请求报文
        // 检测用户是否具有登录的session
        if($request->session()->has('id')){
            return $next($request);
        }else{
            // 跳转到登录页面
            return redirect('/login');
        }
        
    }
}
