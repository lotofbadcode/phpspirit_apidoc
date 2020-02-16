<?php

namespace app\controller;

use app\controller\Base;
use app\model\Project as ModelProject;
use Exception;
use think\facade\Db;

class Project extends Base
{
    public function index()
    {
        $projects = Db::name('project_user')
            ->alias('user')
            ->leftJoin('project project', 'project.id = user.projectid')
            ->field('user.uid,user.iscreate,project.*')
            ->select();
        return $this->success('', $projects);
    }
    public function save(ModelProject $modelProject)
    {

        if ($this->request->isPost()) {
            try {
                $data = $this->request->post();
                $modelProject->add($data, $this->request->userinfo['id']);
            } catch (Exception $ex) {
                return $this->error($ex->getMessage());
            }
            return $this->success();
        }
    }

    /**
     * 获取项目详情
     *
     * @return void
     */
    public function read()
    {
        $project = Db::name('project_user')
            ->alias('user')
            ->leftJoin('project project', 'project.id = user.projectid')
            ->field('project.*')
            ->where('user.uid', '=', $this->request->userinfo['id'])
            ->where('project.id', '=', $this->request->param('projectid'))
            ->find();
        return $this->success('', $project);
    }
}
