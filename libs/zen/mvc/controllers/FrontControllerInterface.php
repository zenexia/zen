<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:02
 */

namespace zen\mvc\controllers;


use zen\http\{RequestInterface, ResponseInterface};
use zen\routing\{RouterInterface, DispatcherInterface};

interface FrontControllerInterface
{
    public function __construct(RouterInterface $router,DispatcherInterface $dispatcher);
    public function run(RequestInterface $request, ResponseInterface $response);
}