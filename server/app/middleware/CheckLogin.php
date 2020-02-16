<?php

namespace app\middleware;

use Exception;
use Firebase\JWT\JWT;

class CheckLogin
{
    public function handle($request, \Closure $next)
    {
        $token = $request->header('token');
        try {
            $tokenarr = JWT::decode($token, '123456', ['HS256']);
        } catch (Exception $ex) {
            return json(['code' => -999, 'message' => '登录超时，请重新登录']);
        }
        $request->userinfo = (array) $tokenarr->userinfo; // 当前登录的账号信息

        return $next($request);
    }
}
