<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 21.06.2018
 * Time: 14:21
 */

namespace components\models;


class CategoryNested extends AbstractModel
{
    /**
     * @var AbstractDB $db
     * @return array
     */

    public function getData()
    {
        $sql = 'select * from `nested` order by `left`';
        $this->db->connect();
        $categoryData = $this->db->getRows($sql);
        return $this->buildArrTree($categoryData);
    }

    /**
     * @param array $categoryData
     * @param int $level
     * @param int $left
     * @return array
     */
    private function buildArrTree(array $categoryData, $level = 1, $left = 0)
    {
        $result = [];
        foreach ($categoryData as $item){
            if ($level == $item['level'] && ($item['left'] - $left == 1)) {
                $item['children'] = $this->buildArrTree($categoryData, $level + 1, $item['left']);
                $result[] = $item;
                $left = $item['right'];
            }
        }
        return $result;
    }
}