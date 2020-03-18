<?php

namespace App\Http\Middleware;

use Closure;

class BasicAuthMiddleware
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
        switch (true) {
            case !isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']):
            case $_SERVER['PHP_AUTH_USER'] !== 'admin':
            case $_SERVER['PHP_AUTH_PW']   !== 'pass0318':
                header('WWW-Authenticate: Basic realm="Enter username and password."');
                header('Content-Type: text/plain; charset=utf-8');
                die('このページを見るにはログインが必要です');
        }

        header('Content-Type: text/html; charset=utf-8');

        return $next($request);
    }
}
