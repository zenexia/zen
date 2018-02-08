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

class RouteRedirect extends Route
{

    protected $redirectTo;

    public function __construct(
        string $path,
        string $redirectTo,
        string $name = '',
        array $methods = [],
        array $paramDefaults = [],
        array $conditions = []
    ) {
        parent::__construct($path, $name, $methods, $paramDefaults, $conditions);
        $this->redirectTo = $redirectTo;
    }

    public function getUrl():string {
        return $this->redirectTo;
    }

}