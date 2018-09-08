<?php

namespace components;

use components\DB\DB;
use components\MenuFactory\ClojureMenuFactory;
use components\MenuFactory\MenuFactory;
use components\MenuFactory\NestedMenuFactory;
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
        $db = new DB();

        //Clojure

        $clojureFactory = new ClojureMenuFactory($db);
        $menuClojure = $clojureFactory->start();
        echo $menuRender->startRender($menuClojure);

        //Nested
        $nestedFactory = new NestedMenuFactory($db);
        $menuNested = $nestedFactory->start();
        echo $menuRender->startRender($menuNested);
    }
}