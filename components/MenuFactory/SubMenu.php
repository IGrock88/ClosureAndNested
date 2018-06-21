<?php
/**
 * User: IGrock
 * Date: 15.06.2018
 * Time: 16:00
 */
namespace components\MenuFactory;

/**
 * Class SubMenu
 * @package components\MenuFactory
 */
class SubMenu extends AbstractMenuElement
{

    /**
     * @return string
     */
    public function render()
    {
        $html = "<li>$this->title<ul>";
        foreach ($this->subElements as $menuItem){
            /**
             * @var $menuItem  AbstractMenuElement
             */
            $html = $html . $menuItem->render();
        }
        $html = $html. "</ul></li>";
        return $html;
    }
}