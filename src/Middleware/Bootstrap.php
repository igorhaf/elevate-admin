<?php

namespace Igorhaf\Admin\Middleware;

use Closure;
use Igorhaf\Admin\Facades\Admin;
use Illuminate\Http\Request;

class Bootstrap
{
    public function handle(Request $request, Closure $next)
    {
        Admin::bootstrap();

        return $next($request);
    }
}
