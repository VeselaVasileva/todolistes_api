<?php
    //require 'vendor\autoload.php';
    session_start();
    //Headers
    header("Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");
   

    
    include_once 'Controller\UserController.php';

    use controllers\UserController;

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = explode( '/', $uri );

    $controllerName = !empty($uri[2]) ? $uri[2] : 'User';
    $class = 'controllers\\'.$controllerName.'Controller';

    if (class_exists($class)) {
        $repository =  new $class();
    } else {
        die ('Error 404'); 
    }
    

    $action = !empty($uri[3]) && is_callable([$repository,$uri[3]]) ? $uri[3] : 'index';

    $pageContent = empty($uri['4']) ? $repository->$action() : $repository->$action($uri['4']);
    require 'Vue\header.php';
?>