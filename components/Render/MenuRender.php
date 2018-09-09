<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 08.09.2018
 * Time: 17:10
 */

namespace components\render;

use components\MenuFactory\AbstractMenuElement;
use components\MenuFactory\Menu;

class MenuRender implements IRender
{

    /**
     * @param Menu $menu
     * @return string
     */
     public function startRender(Menu $menu)
    {
        $html = "<ul>";
        foreach ($menu->getSubElements() as $menuItem){
            /**
             * @var $menuItem  AbstractMenuElement
             */
            $html = $html . $menuItem->render();
        }
        $html = $html . "</ul>";
        return $html;
    }

}