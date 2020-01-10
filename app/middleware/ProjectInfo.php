<?php

namespace app\middleware;

use think\facade\Db;
use think\facade\Session;

class ProjectInfo
{
    public function handle($request, \Closure $next)
    {
        if (!Session::get('projectinfo')) {
            if (!$request->param('projectid')) {
                //跳转到登录页面
                if ($request->isAjax()) {
                    return json(['code' => -999, 'message' => '登录超时，请重新登录']);
                } else {
                    return redirect(url('login/login'));
                }
            }
            $projects = Db::name('project_user')
                ->alias('user')
                ->leftJoin('project project', 'project.id = user.projectid')
                ->field('user.uid,user.iscreate,project.id,project.projectname')
                ->where('project.id', '=', $request->param('projectid'))
                ->find();
            Session::set('projectinfo', $projects);
        }

        return $next($request);
    }
}
