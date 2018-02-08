<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace Apps\Web\Controllers\Home;

use Hiro\Controllers\ViewController;

class IndexController extends ViewController
{

    public function index(){
        $this->response->setView('home/index')->with(['lang' => $this->request->getParam('lang')]);
    }
    public function before(){

    }
}