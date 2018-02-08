<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:11
 */
namespace zen\routing;
use zen\controllers\{ControllerInterface, ControllerNotFoundException};

use zen\http\RequestInterface;
use zen\http\ResponseInterface;

class RouteAction extends Route
{

    protected $controller;
    protected $action;
    const BASE_PATH = 'web\controllers\\';

    public function __construct(
        string $path,
        string $controller,
        string $action = 'index',
        array $methods = [],
        string $name = '',
        array $paramDefaults = [],
        array $conditions = []
    ) {
        parent::__construct($path, $name, $methods, $paramDefaults, $conditions);
        $this->controller = $controller;
        $this->action = $action;
    }

    public function getController(RequestInterface $request, ResponseInterface $response):ControllerInterface {
        $controller = self::BASE_PATH . $this->controller;
        //make sure the class exists
        if(!class_exists($controller)){
            throw new ControllerNotFoundException("Controller class $controller does not exist", 2356);
        }
        return new $controller($request, $response);
    }

    public function getAction(){
        return $this->action;
    }

}