<?php
/**
 * User: IGrock
 * Date: 15.06.2018
 * Time: 15:54
 */

namespace components\MenuFactory;

/**
 * Class AbstractMenuElement
 * @package components\MenuFactory
 */
abstract class AbstractMenuElement
{

    protected $id;
    protected $title;
    protected $subElements;

    /**
     * AbstractMenuElement constructor.
     * @param integer $id
     * @param string $title
     * @param array $subElements
     */
    public function __construct($id = null, $title = null, array $subElements = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->subElements = $subElements;
    }
   /**
     * Render menu elements
     */
    abstract public function render();
}