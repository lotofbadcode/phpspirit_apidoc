<?php

namespace app\apidoc\controller;

use app\common\model\Project as ModelProject;
use Exception;
use think\facade\Db;
use think\facade\View;

class Project extends Base
{
    public function index()
    {
        $projects = Db::name('project_user')
            ->alias('user')
            ->leftJoin('project project', 'project.id = user.projectid')
            ->field('user.uid,user.iscreate,project.id,project.projectname')
            ->select();
        View::assign('projects', $projects);
        return View::fetch();
    }
    public function add(ModelProject $modelProject)
    {

        if ($this->request->isAjax()) {
            try {
                $data = $this->request->post();
                $modelProject->add($data['projectname'], $this->loginuser['id']);
            } catch (Exception $ex) {
                return $this->error($ex->getMessage());
            }
            return $this->success();
        }
    }
}
