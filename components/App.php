<?php

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

    /**
     * Launch application
     */
    public function init()
    {
        //Clojure
        $db = new DB();
        $category = new CategoryClojure($db);
        $categoryData = $category->getData();
        $menuFactory = new MenuFactory();
        $menu = $menuFactory->runBuilding($categoryData);
        echo $menu->render();

        //Nested
        $categoryNested = new CategoryNested($db);
        $categoryDataNested = $categoryNested->getData();
        $menuNested = $menuFactory->runBuilding($categoryDataNested);
        echo $menuNested->render();
    }
}