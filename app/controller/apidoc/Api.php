<?php

namespace app\controller\apidoc;

use app\controller\ApiBase;
use think\facade\View;

class Api extends ApiBase
{

    public function index()
    {
        return View::fetch();
    }
}
