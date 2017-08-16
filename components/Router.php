<?php

//Component for work with routes
class Router
{

    //Array with routes
    private $routes;


    public function __construct()
    {
        // File path with routes
        $routesPath = ROOT . '/config/routes.php';

        // Get routes from file
        $this->routes = include($routesPath);
    }

    
    //Returns the query string
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    //Method for request processing
    public function run()
    {
        // Get string request
        $uri = $this->getURI();

        // Check the availability of such a request in the routes array (routes.php)
        foreach ($this->routes as $uriPattern => $path) {

            // Compare $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Get an internal path from an external path according to the rule.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Identify controller, action, parameters

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                // Connect the controller class file
                $controllerFile = ROOT . '/controllers/' .
                        $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Create object, call method (action)
                $controllerObject = new $controllerName;

                //Calling the required method ($actionName) in some class ($controllerObject) with specified parameters ($parameters)
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                // If the controller method is successfully called, we terminate the router
                if ($result != null) {
                    break;
                }
            }
        }
    }

}
