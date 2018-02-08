<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:12
 */
namespace zen\routing;

use zen\http\RequestInterface;
use zen\http\ResponseInterface;

Interface DispatcherInterface {

    public function dispatch(RouteInterface $route, RequestInterface $request,ResponseInterface $response);

}