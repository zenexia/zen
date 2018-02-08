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

class Router implements RouterInterface
{

    protected $routes;

    public function __construct(RouteCollection $routes) {
        $this->routes = $routes;
    }

    public function route(RequestInterface $request, ResponseInterface $response) {

        $rc = $this->routes->getIterator();
        $rc->rewind();
        while($rc->valid()) {
            $route = $rc->current();
            if ($route->match($request)) {
                return $route;
            }
            $rc->next();
        }
        $response->addHeader("HTTP/1.0 404 Page Not Found")->send();
        throw new \OutOfRangeException("No route matched the given URI.");
    }


}