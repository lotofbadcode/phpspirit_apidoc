<?php

namespace app\apidoc\controller;

use think\facade\View;

class Api extends Base
{

    public function index()
    {
        return View::fetch();
    }
}
