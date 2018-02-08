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

class Logout extends ViewController
{

    public function index()
    {
        // Check Auth;
        $s = new Session();
        $s->unset("user");
        return $this->response->redirect("/");
    }
}