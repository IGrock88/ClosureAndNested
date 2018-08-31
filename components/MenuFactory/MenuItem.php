<?php

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