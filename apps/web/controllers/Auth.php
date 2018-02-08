<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;

use zen\controllers\ViewController;

class Auth extends ViewController
{

    public function index(){
        $this->response->setView('public/index')->with(['lang' => $this->request->getParam('lang')]);
    }
    public function before(){

    }
    public function formLogin()
    {
        $this->response->setView('auth/forms/login')->with(['lang' => $this->request->getParam('lang')]);
    }
}