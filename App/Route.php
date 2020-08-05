<?php

namespace App;

class Route {

    // Mapping the routes and yours action in application
    public function initRoutes(){
        $routes["home"] = Array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes["about_us"] = Array(
            'route' => '/about_us',
            'controller' => 'indexController',
            'action' => 'aboutus'
        );
    }

    // Getting the url of application and testing if is a valid path
    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}

?>