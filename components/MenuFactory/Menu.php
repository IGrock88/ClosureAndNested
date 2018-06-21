<?php
/**
 * User: IGrock
 * Date: 15.06.2018
 * Time: 16:02
 */
namespace components\MenuFactory;

/**
 * Class root container for menu
 * Class Menu
 * @package components\MenuFactory
 */
class Menu
{

    /**
     * @var array $subElements
     */
    private $subElements = [];

    /**
     * Menu constructor.
     * @param array $subElements
     */
    public function __construct(array $subElements)
    {
        $this->subElements = $subElements;
    }

    /**
     * @return string
     */
    public function render()
    {
        $html = "<ul>";
        foreach ($this->subElements as $menuItem){
            /**
             * @var $menuItem  AbstractMenuElement
             */
            $html = $html . $menuItem->render();
        }
        $html = $html . "</ul>";
        return $html;
    }
}