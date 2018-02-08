<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:11
 */
namespace zen\routing;
use Hiro\Controllers\ControllerInterface;
use zen\http\RequestInterface;

Interface RouteInterface {
    public function match(RequestInterface $request);
}