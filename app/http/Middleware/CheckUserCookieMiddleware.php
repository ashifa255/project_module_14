<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserCookieMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->cookie("user-id")){
            return redirect("/login-page")->with("error", "Please login First");
        }
        return $next($request);
    }

    protected $routeMiddleware = [
    // ...
    'checkUser' => \App\Http\Middleware\CheckUserCookieMiddleware::class,
];

}
