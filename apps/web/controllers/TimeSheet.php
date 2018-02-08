<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace web\controllers;

use zen\mvc\controllers\Secure;

class TimeSheet extends Secure
{

    public function index(){
        $this->response->setView('time-sheets/index')->with(['lang' => $this->request->getParam('lang')]);
    }
    public function before(){

    }
}