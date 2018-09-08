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


    public function __construct($id, $title, $subElements)
    {
        parent::__construct($id, $title);
        $this->subElements = $subElements;
    }

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