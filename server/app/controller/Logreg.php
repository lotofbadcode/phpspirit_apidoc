<?php

namespace app\controller;

use app\BaseController;
use app\model\User;
use Exception;
use Firebase\JWT\JWT;

class Logreg extends BaseController
{
    public function login()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();

            $userinfo = User::where('username', '=', $data['username'])
                ->find();
            if (!$userinfo) {
                return json([
                    'code' => -1,
                    'message' => '账号或密码不正确',
                ]);
            }

            if (!password_verify($data['pwd'], $userinfo['pwd'])) {
                return json([
                    'code' => -1,
                    'message' => '账号或密码不正确',
                ]);
            }

            unset($userinfo['account']);

            $time = time();
            $tokendata = [
                'iss' => $this->request->domain(),
                'iat' => $time,
                'exp' => $time + 30,
                'userinfo' => $userinfo
            ];
            $refreshtokendata = [
                'iss' => $this->request->domain(),
                'iat' => $time,
                'exp' => $time + 2400,
                'userinfo' => $userinfo
            ];
            return json(['code' => 0, 'message' => '', 'data' => [
                'userinfo' => $userinfo,
                'token' => JWT::encode($tokendata, '123456'),
                'refreshtoken' => JWT::encode($refreshtokendata, '123456')
            ]]);
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
                return $this->error($ex->getMessage());
            }
            return $this->success();
        }
    }

    /**
     * 刷新token
     *
     * @return void
     */
    public function refreshtoken()
    {
        if ($this->request->isPost()) {
            $refreshtoken = $this->request->header('refreshtoken');
            try {
                $refreshtokenarr = JWT::decode($refreshtoken, '123456', ['HS256']);
            } catch (Exception $ex) {
                return json(['code' => -999, 'message' => 'refresh过期']);
            }
            $time = time();
            $tokendata = [
                'iss' => $this->request->domain(),
                'iat' => $time,
                'exp' => $time + 60*20,
                'userinfo' => $refreshtokenarr->userinfo
            ];

            $refreshtokendata = [
                'iss' => $this->request->domain(),
                'iat' => $time,
                'exp' => $time + 60*40,
                'userinfo' => $refreshtokenarr->userinfo
            ];
            return json(['code' => 0, 'message' => '', 'data' => [
                'userinfo' => $refreshtokenarr->userinfo,
                'token' => JWT::encode($tokendata, '123456'),
                'refreshtoken' => JWT::encode($refreshtokendata, '123456')
            ]]);
        }
    }
}
