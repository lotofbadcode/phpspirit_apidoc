<?php

namespace app\controller\apidoc;

use app\controller\ApiBase;
use app\model\ApiCode as ModelApiCode;
use Exception;
use think\facade\View;

class ApiCode extends ApiBase
{
    public function index()
    {
        return View::fetch();
    }

    public function add()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $data['projectid'] = $this->projectinfo['id'];
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
