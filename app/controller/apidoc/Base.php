<?php

namespace app\controller\apidoc;

use app\middleware\Auth;
use app\BaseController;
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
    protected $middleware = [Auth::class];
    public function initialize()
    {
        $this->setStaticPath();
        $this->loginuser = Session::get('loginuser');
    }
    public function setStaticPath()
    {
        $appconfig = Config::get('app');
        $static_path = $appconfig['root_path'] . '/static/';
        View::assign('static_path', $static_path);
    }
}
