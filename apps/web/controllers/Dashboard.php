<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;

use Hiro\Controllers\ViewController;

class Dashboard extends ViewController
{

    public function index(){
        $this->response->setView('public/index')->with(['lang' => $this->request->getParam('lang')]);
    }
    public function before(){

    }
}