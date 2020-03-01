<?php

namespace app\controller;

use app\controller\Base;
use app\model\ApiCode as ModelApiCode;
use Exception;
use think\facade\View;

class ApiCode extends Base
{
    public function index()
    {
        $codes = ModelApiCode::select();
        return $this->success('',$codes);
    }

    public function save()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            try {
                ModelApiCode::create($data);
            } catch (Exception $ex) {
                return $this->error($ex);
            }
            return $this->success();
        }
    }

    public function edit()
    {
    }
}
