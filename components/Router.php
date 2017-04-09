<?php

class Router
{
    private $routes; //array
    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    //returns request string
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        //get request string
        $uri = $this->getURI();
        //check the availability of the request in routes.php
        foreach ($this->routes as $uriPattern => $path)
        {
            //echo "<br>$uriPattern -> $path";
            //comparison $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)) {
                echo "$path";
            }
        }
    }
}