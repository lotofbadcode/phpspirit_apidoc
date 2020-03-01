<?php

namespace app\controller;

use app\controller\Base;
use app\model\Menu as ModelMenu;

class Menu extends Base
{
    public function index(ModelMenu $modelMenu)
    {
        $menus = $modelMenu->deepmenus($this->request->param('pid'));
        return $this->success('', $menus);
    }
}
