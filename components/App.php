<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 21.06.2018
 * Time: 9:53
 */

namespace components;

use components\DB\DB;
use components\MenuFactory\MenuFactory;
use components\models\CategoryClojure;
use components\models\CategoryNested;

/**
 * Class App
 * @package components
 */
class App
{

    use Singleton;

    /**
     * Launch application
     */
    public function init()
    {
        //task1
        $db = DB::getInstance();
        $category = new CategoryClojure($db);
        $categoryData = $category->getData();
        $menuFactory = new MenuFactory();
        $menu = $menuFactory->runBuilding($categoryData);
        echo $menu->render();

        //task2
        $categoryNested = new CategoryNested($db);
        $categoryDataNested = $categoryNested->getData();
        $menuNested = $menuFactory->runBuilding($categoryDataNested);
        echo $menuNested->render();
    }
}