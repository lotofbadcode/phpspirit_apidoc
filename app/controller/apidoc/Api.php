<?php

namespace app\controller\apidoc;

use think\facade\View;

class Api extends Base
{

    public function index()
    {
        return View::fetch();
    }
}
