<?php

namespace http;

class requestHelper
{

    static public function getRequest(){
        $request = new request();
        $request->method = requestHelper::getRequestMethod();
        $request->page=requestHelper::getPage();
        $request->action=requestHelper::getAction();

        return $request;
    }

    public static function findRoute($request,$routes){
        $foundRoute = NULL;
        foreach ($routes as $route) {

            if ($route->page == $request->page && $route->http_method == $request->method && $route->action == $request->action) {
                $foundRoute = $route;
                break;
            }
        }
        return $foundRoute;
    }

    public static function getNotFoundTemplate(){
        controller::getTemplate('notfound');
        exit;
    }

    static public function getRequestMethod()
    {
    $request_method = $_SERVER['REQUEST_METHOD'];
    return $request_method;
    }

//this gets determines the page

    static public function getPage()
    {
//this sets the default page for the app to index
        $page = 'homepage';

//this checks if page is set
        if (!empty($_GET['page'])) {
            $page = $_GET['page'];
        }
        return $page;
    }

//this gets the action out of the URL
    static public function getAction()
    {

//this is a litte code to help the homepage handle post requests if needed
        if (self::getRequestMethod() == 'POST') {
            $action = 'create';


        } else {
            $action = 'show';
        }


        if (!empty($_GET['action'])) {
            $action = $_GET['action'];
        }
        return $action;
    }
}