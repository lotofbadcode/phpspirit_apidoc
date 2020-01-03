<?php

namespace app\apidoc\controller;

use app\BaseController;
use think\facade\Config;
use think\facade\View;

class Login extends BaseController
{
    public function initialize()
    {
        $this->setStaticPath();
    }
    public function setStaticPath()
    {
        $appconfig = Config::get('app');
        $static_path = $appconfig['root_path'] . '/static/' . app('http')->getName() . '/';
        View::assign('static_path', $static_path);
    }
    
    public function login()
    {
        if ($this->request->isPost()) {
        } else {
            return View::fetch();
        }
    }

    public function register()
    {
        if ($this->request->isPost()) {
        } else {
            return View::fetch();
        }
    }
}
