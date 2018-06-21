<?php
/**
 * User: IGrock
 * Date: 15.06.2018
 * Time: 15:58
 */
namespace components\MenuFactory;

/**
 * Class MenuItem
 * @package components\MenuFactory
 */
class MenuItem extends AbstractMenuElement
{
    /**
     * @return string
     */
    public function render()
    {
        return "<li>$this->title</li>";
    }
}