<?php

namespace app\controller\apidoc;

use app\middleware\Auth;
use app\BaseController;
use app\middleware\StaticPath;
use think\facade\Config;
use think\facade\Session;
use think\facade\View;

class Base extends BaseController
{
    /**
     * 登录用户
     *
     * @var [type]
     */
    protected $loginuser;

    /**
     * 登录检查中间件
     *
     * @var array
     */
    protected $middleware = [
        Auth::class,
        StaticPath::class
    ];
    public function initialize()
    {
        $this->loginuser = Session::get('loginuser');
    }
}
