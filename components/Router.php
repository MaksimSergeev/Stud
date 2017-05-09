<?php

class Router
{
    private $routes; //array

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
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
<<<<<<< HEAD
        foreach ($this->routes as $uriPattern => $path) {
            //comparison $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)) {
=======
        foreach ($this->routes as $uriPattern => $path)
        {
            //comparison $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri))
            {
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34
                //take internal path from the external by rule
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //define controller, action and parameters
                //array
                $segments = explode('/', $internalRoute);

<<<<<<< HEAD
                $controllerName = ucfirst(array_shift($segments)) . 'Controller';

                $actionName = 'action' . ucfirst(array_shift($segments));
=======
                $controllerName = ucfirst(array_shift($segments)).'Controller';

                $actionName = 'action'.ucfirst(array_shift($segments));
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34

                $parameters = $segments;

                // connect file class-controller
<<<<<<< HEAD
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                //check exist file controller
                if (file_exists($controllerFile)) {
=======
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                //check exist file controller
                if (file_exists($controllerFile)){
>>>>>>> 64aa5dd42a6bc3f80c07347fde3e9630639c9b34
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