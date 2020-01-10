<?php

namespace app\controller;

use app\BaseController;
use app\middleware\StaticPath;
use app\model\User;
use Exception;
use think\facade\Config;
use think\facade\Session;
use think\facade\View;

class Login extends BaseController
{
    protected $middleware = [
        StaticPath::class
    ];
    public function login()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $userinfo = User::where('username', '=', $data['username'])
                ->find();
            if (!$userinfo) {
            }

            if (!password_verify($data['password'], $userinfo['pwd'])) {
                return json([
                    'code' => -1,
                    'message' => '账户或密码错误'
                ]);
            }

            Session::set('loginuser', $userinfo);
            return json([
                'code' => 0,
                'message' => '账户或密码错误'
            ]);
        } else {
            return View::fetch();
        }
    }

    public function register()
    {
        if ($this->request->isPost()) {

            $data = $this->request->post();
            $data['pwd'] = password_hash($data['password'], PASSWORD_DEFAULT);
            try {
                User::create($data);
            } catch (Exception $ex) {
                return json([
                    'code' => -1,
                    'message' => $ex->getMessage()
                ]);
            }
            return json([
                'code' => 0
            ]);
        } else {
            return View::fetch();
        }
    }
}
