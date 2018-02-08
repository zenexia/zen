<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace controllers\Authentication;

use Hiro\Controllers\ViewController;

class IndexController extends ViewController
{

    public function index(){
        $this->response->setView('home/index')->with(['lang' => $this->request->getParam('lang')]);
    }
    public function before(){

    }
    public function formLogin()
    {
        $this->response->setView('authentication/forms/login')->with(['lang' => $this->request->getParam('lang')]);
    }
}