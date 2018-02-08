<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:02
 */

namespace zen\mvc\controllers;

use zen\http\{RequestInterface, ResponseInterface};
use zen\session\Session;

class Secure implements ControllerInterface
{
    protected $request;
    protected $response;

    public function __construct(RequestInterface $request, ResponseInterface $response)
    {
        $this->request = $request;
        $this->response = $response;
        $s = new Session();
        if(!$s->has("user")){
           return $this->response->redirect("login");
        }

    }
    public function before(){

    }
    public function after(){

    }

}