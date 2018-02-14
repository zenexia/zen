<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;

use zen\mvc\controllers\ViewController;
use zen\session\Session;

class Auth extends ViewController
{

    public function store(){

        // Check Auth;
        $s = new Session();
        $s->set("user", 8347);
        return $this->response->redirect("dashboard");

        //$this->response->setView('public/index')->with(['lang' => $this->request->getParam('lang')]);
    }
    public function before(){

    }
    public function index()
    {
        $this->response->setView('auth/forms/login')->with(['lang' => $this->request->getParam('lang')]);
    }
}