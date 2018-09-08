<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 08.09.2018
 * Time: 17:20
 */

namespace components\MenuFactory;


use components\DB\AbstractDB;

abstract class AbstractFactory
{

    protected $db;

    public function __construct(AbstractDB $db)
    {
        $this->db = $db;
    }

    public function start()
    {
        $menuData = $this->getData();
        return $this->runBuilding($menuData);
    }
    /**
     * Launch building menu objects
     * @param array $arr
     * @return Menu
     */
    final protected function runBuilding(array $arr)
    {
        return new Menu($this->buildTreeObjects($arr));
    }

    /**
     * @param array $arr
     * @return array
     */
    final protected function buildTreeObjects(array $arr)
    {
        $treeObj = [];
        foreach ($arr as $item){
            if(count($item['children'])){
                $treeObj[] = new SubMenu($item['id'], $item['name'], $this->buildTreeObjects($item['children']));

            }
            else{
                $treeObj[] = new MenuItem($item['id'], $item['name']);
            }
        }
        return $treeObj;
    }

    abstract protected function getData();
}