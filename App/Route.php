<?php

namespace App;

use MF\Init\Bootstrap;

//Application's routes
class Route extends BootStrap{

    // Mapping the routes and yours action in application
    protected function initRoutes(){
        $routes["home"] = Array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );

        $routes["about_us"] = Array(
            'route' => '/about_us',
            'controller' => 'IndexController',
            'action' => 'aboutus'
        );

        $this->setRoutes($routes);
    }

}

?>