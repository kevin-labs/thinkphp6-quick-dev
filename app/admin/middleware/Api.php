<?php

namespace app\admin\middleware;

class Api
{
    public function handle($request, \Closure $next)
    {
        // 当前URL
        $current_url = $request->url();

        return $next($request);
    }
}
