<?php

namespace app\apidoc\controller;

use app\apidoc\middleware\Auth;
use app\BaseController;
use think\facade\Config;
use think\facade\Session;
use think\facade\View;

class Base extends BaseController
{
    protected $loginuser;
    protected $middleware = [Auth::class];
    public function initialize()
    {
        $this->setStaticPath();
        $this->loginuser = Session::get('loginuser');
    }
    public function setStaticPath()
    {
        $appconfig = Config::get('app');
        $static_path = $appconfig['root_path'] . '/static/' . app('http')->getName() . '/';
        View::assign('static_path', $static_path);
    }
}
