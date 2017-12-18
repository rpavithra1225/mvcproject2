<?php

namespace http;

class processRequest
{
    public static function createResponse()
    {
        $requested_route = processRequest::getRequestedRoute();
        $controller_name = $requested_route->controller;
        $controller_method = $requested_route->method;
        $controller_name::$controller_method();

    }

    public static function getRequestedRoute()
    {
        $request = requestHelper::getRequest();
        $routes = \routesHelper::getRoutes();

        echo $request->method;
        echo $request->page;
        echo $request->action;
        $foundRoute = NULL;

        $foundRoute = requestHelper::findRoute($request,$routes);
        if (is_null($foundRoute)) {
            requestHelper::getNotFoundTemplate();
        } else {
            return $foundRoute;
        }
    }
}
