<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 08.09.2018
 * Time: 17:28
 */

namespace components\MenuFactory;


use components\models\CategoryClojure;

class ClojureMenuFactory extends AbstractFactory
{

    protected function getData()
    {
        return (new CategoryClojure($this->db))->getData();
    }
}