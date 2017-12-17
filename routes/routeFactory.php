<?php

class routeFactory{

    public static function create($http_method,$page,$action,$controller,$method) {
        
        $route = new route();
        $route->http_method = $http_method;
        $route->page = $page;
        $route->action = $action;
        $route->controller = $controller;
        $route->method = $method;

        return route;
    }
}



?>