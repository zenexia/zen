<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:11
 */
namespace zen\routing;

use zen\http\RequestInterface;
use zen\http\ResponseInterface;

Interface RouterInterface {

    public function __construct(RouteCollection $routes);

    public function route(RequestInterface $request, ResponseInterface $response);

}