<?php

namespace app\model;

use think\facade\Db;
use think\Model;

class Menu extends Model
{
    /**
     * 
     * 查询菜单包含子级submenu
     */
    public function deepmenus($pid)
    {
        $menus = Db::name('menu')
            ->select();
        return $this->recursioncates($menus, $pid);
    }

    public function recursioncates($menus, $pid = 0)
    {
        $parsemenus = [];
        foreach ($menus as $key => $menu) {
            if ($pid == $menu['pid']) {
                $children = $this->recursioncates($menus, $menu['id']);
                if ($children) {
                    $menu['subMenus'] = $children;
                }
                $parsemenus[] = $menu;
            }
        }
        return $parsemenus;
    }
}
