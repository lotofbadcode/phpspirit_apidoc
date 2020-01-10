<?php

namespace app\controller;

use app\middleware\Auth;
use app\BaseController;
use app\middleware\StaticPath;
use think\facade\Session;

class ProjectBase extends BaseController
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
