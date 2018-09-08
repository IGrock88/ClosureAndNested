<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 08.09.2018
 * Time: 17:37
 */

namespace components\MenuFactory;


use components\models\CategoryNested;

class NestedMenuFactory extends AbstractFactory
{

    protected function getData()
    {
        return (new CategoryNested($this->db))->getData();
    }
}