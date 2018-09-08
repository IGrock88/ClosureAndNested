<?php

namespace components;

use components\DB\DB;
use components\MenuFactory\MenuFactory;
use components\models\CategoryClojure;
use components\models\CategoryNested;
use components\render\MenuRender;

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
        $menuRender = new MenuRender();
        //Clojure
        $db = new DB();
        $category = new CategoryClojure($db);
        $categoryData = $category->getData();
        print_r($categoryData);
        $menuFactory = new MenuFactory();
        $menuClojure = $menuFactory->runBuilding($categoryData);

        echo $menuRender->startRender($menuClojure);

        //Nested
        $categoryNested = new CategoryNested($db);
        $categoryDataNested = $categoryNested->getData();
        $menuNested = $menuFactory->runBuilding($categoryDataNested);
        echo $menuRender->startRender($menuNested);
    }
}