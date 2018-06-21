<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 21.06.2018
 * Time: 10:17
 */

namespace components\models;

use components\DB\AbstractDB;

abstract class AbstractModel
{
    /**
     * @var AbstractDB $db
     */
    protected $db;

    /**
     * AbstractModel constructor.
     * @param AbstractDB $db
     */
    public function __construct(AbstractDB $db)
    {
        $this->db = $db;

    }

    abstract public function getData();
}