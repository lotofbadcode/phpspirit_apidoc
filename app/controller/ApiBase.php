<?php

namespace app\controller;

use app\middleware\Auth;
use app\BaseController;
use app\middleware\ProjectInfo;
use app\middleware\StaticPath;
use think\facade\Session;

class ApiBase extends BaseController
{
    /**
     * 登录用户
     *
     * @var [type]
     */
    protected $loginuser;

    /**
     * 项目信息
     *
     * @var [type]
     */
    protected $projectinfo;
    /**
     * 登录检查中间件
     *
     * @var array
     */
    protected $middleware = [
        Auth::class,
        ProjectInfo::class,
        StaticPath::class
    ];
    public function initialize()
    {
        $this->loginuser = Session::get('loginuser');
        $this->projectinfo = Session::get('projectinfo');
    }
}
