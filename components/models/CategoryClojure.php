<?php


namespace components\models;

use components\DB\AbstractDB;


class CategoryClojure extends AbstractModel
{
    /**
     * @var AbstractDB $db
     * @return array
     */
    public function getData()
    {
        $sql = 'select c.id_category as id, c.name as name , cl.child_id as child_id, cl.parent_id as parent_id, 
                cl.level as level 
                from categories as c
                join category_links as cl
                on c.id_category = cl.child_id';

        $this->db->connect();
        $categoryData = $this->db->getRows($sql);
        $arr = $this->getRoots($categoryData);
        $arr = $this->buildArrTree($arr, $categoryData);
        return $arr;
    }

    /**
     * @param array $arr
     * @param array $categoryData
     * @return array
     */
    private function buildArrTree(array $arr, array $categoryData)
    {
        for ($i = 0; $i < count($arr); $i++) {
            $arr[$i]['children'] = $this->getChildren($arr[$i], $categoryData);
        }
        return $arr;
    }

    /**
     * @param array $arr
     * @return array
     */
    private function getRoots(array $arr)
    {
        $result = [];
        foreach ($arr as $item) {
            if ($item['level'] == 0) {
                $result[] = $item;
            }
        }
        return $result;
    }

    /**
     * @param array $parent
     * @param array $categoryData
     * @return array
     */
    private function getChildren(array $parent, array $categoryData)
    {
        $result = [];
        foreach ($categoryData as $itemOriginal) {
            if ($parent['id'] == $itemOriginal['parent_id'] & $parent['level'] == $itemOriginal['level'] - 1) {
                $itemOriginal['children'] = $this->getChildren($itemOriginal, $categoryData);
                $result[] = $itemOriginal;
            }
        }
        return $result;
    }
}