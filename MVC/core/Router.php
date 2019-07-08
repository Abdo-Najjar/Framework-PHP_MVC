<?php

namespace App\Core;
use Exception;

class Router
{

    protected $routes = [

        "GET"=>[],
        "POST"=>[],
        "PUT"=>[],
        "DELETE"=>[]

    ];

    public function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }


    public function get($uri , $controller)
    {
        $this->routes["GET"][$uri] = $controller;

    }



    public function post($uri , $controller)
    {
        $this->routes["POST"][$uri] = $controller;

    }



    public function delete($uri , $controller)
    {
        $this->routes["DELETE"][$uri] = $controller;

    }

    public function put($uri , $controller)
    {
        $this->routes["put"][$uri] = $controller;

    }


    public function define($routes)
    {
        $this->routes = $routes;
    }



    public function direct($uri ,$method)
    {
        if(array_key_exists($uri,$this->routes[$method])){

         return $this->callAction(
            ...explode("@",$this->routes[$method][$uri])
         );  

        }
       throw new Exception("no routes define in this URI");
    }


    protected function callAction($controller , $action)
    {

        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;

        if(! method_exists($controller,$action))
        {
            throw new Exception(
                "{$controller} dose not respond to the {$action} action."
            );
        }
        if(!is_int($controller->$action())){
            echo $controller->$action(); 
        }

    }

}