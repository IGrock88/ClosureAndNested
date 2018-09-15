<?php

namespace components\MenuFactory;

/**
 * Class SubMenu
 * @package components\MenuFactory
 */
class SubMenu extends AbstractMenuElement
{

    /**
     * @property AbstractMenuElement[] $subElements
     */
    private $subElements;

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

    /**
     * @param AbstractMenuElement[] $elements
     */
    public function addElements(array $elements)
    {
        $this->subElements = $elements;
    }


}