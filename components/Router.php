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
            //comparison $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri))
            {
                //take internal path from the external by rule
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //define controller, action and parameters
                //array
                $segments = explode('/', $internalRoute);

                $controllerName = ucfirst(array_shift($segments)).'Controller';

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                // connect file class-controller
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                //check exist file controller
                if (file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                //create object
                $controllerObject = new $controllerName;
                //call method(action) from controllerObject
                //result of some action
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null) {
                    break;
                }
            }
        }
    }
}