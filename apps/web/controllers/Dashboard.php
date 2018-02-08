<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;

use zen\mvc\controllers\Secure;

class Dashboard extends Secure
{

    public function index(){
        $this->response->setView('dashboard/index')->with(['lang' => $this->request->getParam('lang')]);
    }
    public function before(){

    }
}