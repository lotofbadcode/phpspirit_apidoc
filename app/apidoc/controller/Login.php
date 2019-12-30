<?php

namespace app\apidoc\controller;

use app\BaseController;
use think\facade\View;

class Login extends BaseController
{
    public function login()
    {
        if ($this->request->isPost()) {
        } else {
            return View::fetch();
        }
    }
}
