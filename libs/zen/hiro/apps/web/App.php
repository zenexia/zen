<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-30
 * Time: 11:54
 */

namespace zen\hiro\apps\web;

use zen\hiro\apps\AppInterface;
use zen\hiro\apps\Application;
use zen\http\{Request, Response};
use zen\routing\{Router,Dispatcher};
use zen\mvc\controllers\FrontController;


class App extends Application implements AppInterface
{


    protected $routeCollection;

    public function __construct(string $appRoot = '')
    {
        parent::__construct($appRoot);
    }

    public function addRoutes(string $routeFile)
    {
        $this->routeCollection = require_once $this->appRoot . $routeFile;
    }

    public function run(string $viewsPath){

        try{
            $request = new Request("$_SERVER[REQUEST_URI]", true);

            $response = new Response($this->appRoot . $viewsPath);

            $router = new Router($this->routeCollection);

            $dispatcher = new Dispatcher();

            $frontController = new FrontController($router, $dispatcher);

            $frontController->run($request, $response);
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}