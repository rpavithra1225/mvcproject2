<?php

class routesHelper
{

    public static function getRoutes()
    {

        /*-------------this function creates an object of route using routeFactory class----------------*/
        /*-----------------------------Routes for Homepage Controller-----------------------------------*/

        $routes[] = routeFactory::create('GET','homepage','show','homepageController','show');
        $routes[] = routeFactory::create('POST','homepage','create','homepageController','create');

        /*-----------------------------Routes for Tasks Controller------------------------------------ */

        $routes[] = routeFactory::create('GET','tasks','show','tasksController','show');
        $routes[] = routeFactory::create('GET','tasks','all','tasksController','all');

        $routes[] = routeFactory::create('GET','tasks','edit','tasksController','edit');
        $routes[] = routeFactory::create('POST','tasks','edit','tasksController','store');
        $routes[] = routeFactory::create('POST','tasks','store','tasksController','store');

        $routes[] = routeFactory::create('GET','tasks','create','tasksController','create');

        $routes[] = routeFactory::create('GET','tasks','delete','tasksController','delete');
        $routes[] = routeFactory::create('POST','tasks','delete','tasksController','delete');

        /*-----------------------------Routes for Accounts Controller--------------------------------- */

        $routes[] = routeFactory::create('GET','accounts','show','accountsController','show');
        $routes[] = routeFactory::create('GET','accounts','all','accountsController','all');

        $routes[] = routeFactory::create('GET','accounts','edit','accountsController','edit');
        $routes[] = routeFactory::create('POST','accounts','edit','accountsController','store');

        $routes[] = routeFactory::create('POST','accounts','delete','accountsController','delete');

        $routes[] = routeFactory::create('GET','accounts','login','accountsController','showLogin');
        $routes[] = routeFactory::create('POST','accounts','login','accountsController','login');

        $routes[] = routeFactory::create('GET','accounts','register','accountsController','register');
        $routes[] = routeFactory::create('POST','accounts','register','accountsController','store');

        $routes[] = routeFactory::create('GET','accounts','logout','accountsController','logout');

        //print_r($routes);
        return $routes;
    }
}

