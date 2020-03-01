<?php

namespace app\controller;

use app\model\DataSource as ModelDataSource;
use Exception;

class Datasource extends Base
{
    public function index()
    {
        $datasources = ModelDataSource::select();
        return $this->success('', $datasources);
    }

    /**
     * 新增数据源
     *
     * @return void
     */
    public function save()
    {
        if ($this->request->isPost()) {
            try {
                $data = $this->request->post();
                ModelDataSource::create($data);
            } catch (Exception $ex) {
                return $this->error($ex->getMessage());
            }
            return $this->success();
        }
    }
}
