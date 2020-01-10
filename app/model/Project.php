<?php

namespace app\model;

use Exception;
use think\facade\Db;
use think\Model;

class Project extends Model
{
    public function add($projecttitle, $uid)
    {
        Db::startTrans();
        try {
            $projectid = Db::name('project')->insertGetId([
                'projectname' => trim($projecttitle),
                'createtime' => time()
            ]);
            Db::name('project_user')->insert(
                [
                    'projectid' => $projectid,
                    'uid' => $uid,
                    'iscreate' => 1
                ]
            );
            // 提交事务
            Db::commit();
        } catch (Exception $ex) {
            // 回滚事务
            Db::rollback();
            throw new Exception($ex->getMessage());
        }
    }
}
