<?php

namespace app\middleware;

use think\facade\Session;

class Auth
{
    public function handle($request, \Closure $next)
    {
        if (!Session::get('loginuser')) {
            if ($request->isAjax()) {
                return json(['code' => -999, 'message' => '登录超时，请重新登录']);
            } else {
                return redirect(url('apidoc.login/login'));
            }
        }


        return $next($request);
    }
}
