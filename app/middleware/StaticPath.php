<?php

namespace app\middleware;

use think\facade\Config;
use think\facade\View;

class StaticPath
{
    public function handle($request, \Closure $next)
    {
        $appconfig = Config::get('app');
        $static_path = $appconfig['root_path'] . '/static/';
        View::assign('static_path', $static_path);
        return $next($request);
    }
}
