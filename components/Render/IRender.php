<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 08.09.2018
 * Time: 17:09
 */

namespace components\render;

use components\MenuFactory\Menu;

interface IRender
{

    public function startRender(Menu $menu);
}