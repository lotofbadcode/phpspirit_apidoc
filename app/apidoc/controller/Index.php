<?php

namespace app\apidoc\controller;

use think\facade\View;

class Index extends Base
{
    public function index()
    {
        return View::fetch();
    }

    public function main()
    {
        return View::fetch();
    }
}
