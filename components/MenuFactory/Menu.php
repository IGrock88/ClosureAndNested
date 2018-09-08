<?php

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
     * @return array
     */
    public function getSubElements()
    {
        return $this->subElements;
    }


}