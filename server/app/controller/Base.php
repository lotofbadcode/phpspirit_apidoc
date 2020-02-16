<?php

namespace app\controller;

use app\BaseController;
use app\middleware\CheckLogin;

class Base extends BaseController
{

    protected $middleware = [
        CheckLogin::class,
    ];

}
