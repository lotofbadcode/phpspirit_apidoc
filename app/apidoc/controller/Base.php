<?php

namespace app\apidoc\controller;

use app\BaseController;
use think\facade\Config;
use think\facade\View;

class Base extends BaseController
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
}
