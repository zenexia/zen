<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:03
 */

namespace zen\mvc\controllers;

use zen\http\{RequestInterface, ResponseInterface};
use zen\routing\{RouterInterface, DispatcherInterface};

class FrontController implements FrontControllerInterface
{
    protected $router;
    protected $dispatcher;

    public function __construct(RouterInterface $router,DispatcherInterface $dispatcher) {
        $this->router = $router;
        $this->dispatcher = $dispatcher;
    }

    public function run(RequestInterface $request, ResponseInterface $response) {
        $route = $this->router->route($request, $response);
        $this->dispatcher->dispatch($route, $request, $response);
    }
}