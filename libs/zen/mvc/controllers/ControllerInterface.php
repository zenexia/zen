<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:02
 */

namespace zen\mvc\controllers;


use zen\http\{RequestInterface, ResponseInterface};

interface ControllerInterface
{
    public function __construct(RequestInterface $request, ResponseInterface $response);
}