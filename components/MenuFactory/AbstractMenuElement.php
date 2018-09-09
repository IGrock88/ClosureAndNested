<?php

namespace components\MenuFactory;

/**
 * Class AbstractMenuElement
 * @package components\MenuFactory
 */
abstract class AbstractMenuElement
{

    protected $id;
    protected $title;

    /**
     * AbstractMenuElement constructor.
     * @param integer $id
     * @param string $title
     */
    public function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
    }
   /**
     * Render menu elements
     */
    abstract public function render();
}