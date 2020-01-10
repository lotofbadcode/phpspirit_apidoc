<?php

namespace app\controller\apidoc;

use app\controller\ApiBase;
use think\facade\View;

class Index extends ApiBase
{
    public function index()
    {
        return View::fetch();
    }
}
