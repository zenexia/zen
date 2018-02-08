<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;

use zen\controllers\ViewController;

class Home extends ViewController
{

    public function index(){
        $this->response->setView('home')->with(['lang' => $this->request->getParam('lang')]);
    }
    public function before(){

    }
}