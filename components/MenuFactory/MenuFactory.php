<?php
/**
 * User: IGrock
 * Date: 15.06.2018
 * Time: 16:26
 */
namespace components\MenuFactory;

class MenuFactory
{

    /**
     * Launch building menu objects
     * @param array $arr
     * @return Menu
     */
    public function runBuilding(array $arr)
    {
        return new Menu($this->buildTreeObjects($arr));
    }

    /**
     * @param array $arr
     * @return array
     */
    private function buildTreeObjects(array $arr)
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
}

