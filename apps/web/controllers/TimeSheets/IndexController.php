<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:31
 */

namespace Apps\Web\Controllers\TimeSheets;

use Hiro\Controllers\RestrictedController;

class IndexController extends RestrictedController
{

    public function index(){
        $this->response->setView('time-sheets/index')->with(['lang' => $this->request->getParam('lang')]);
    }
    public function before(){

    }
}