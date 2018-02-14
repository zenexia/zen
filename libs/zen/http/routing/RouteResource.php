<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:11
 */
namespace zen\routing;
use zen\mvc\controllers\{ControllerInterface, ControllerNotFoundException};
use zen\http\{RequestInterface, ResponseInterface};

class RouteResource extends Route
{

    protected $controller;
    protected $actions;
    protected $splitAjax;
    const BASE_PATH = 'web-root\controllers\\';

    public function __construct(
        string $path,
        string $controller,
        array $actions,
        string $name = '',
        array $methods = ['GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE', 'CONNECT', 'OPTIONS', ],
        array $paramDefaults = [],
        array $conditions = [],
        bool $splitAjax = true
    ) {
        parent::__construct($path, $name, $methods, $paramDefaults, $conditions);
        $this->controller = $controller;
        $this->actions = $actions;
        $this->splitAjax = $splitAjax;
    }

    public function getController(RequestInterface $request, ResponseInterface $response):ControllerInterface {
        $controller = self::BASE_PATH . $this->controller;

        //make sure the class exists
        if(!class_exists($controller)){
            throw new ControllerNotFoundException("Controller class $controller does not exist", 2356);
        }
        return new $controller($request, $response);
    }

    public function getAction(RequestInterface $request){
        $m = $request->getMethod();
        $action = "index";
        switch($m)
        {
            case "GET":
                $action = "index";
                break;
            case "POST":
                $action = "store";
                break;
        }
        return $action;
    }

}