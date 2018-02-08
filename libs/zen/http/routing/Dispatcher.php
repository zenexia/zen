<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:12
 */
namespace zen\routing;
use zen\http\RequestInterface;
use zen\http\ResponseInterface;

class Dispatcher implements DispatcherInterface
{

    public function dispatch(RouteInterface $route, RequestInterface $request,ResponseInterface $response)
    {
        if(get_class($route) == 'zen\routing\RouteRedirect') {
            $url = $route->getUrl();
            //find if url contains vars
            $pattern = '/{(.*?)}/';
            $data['lang'] = 'en-US';
            $tunedUrl = preg_replace_callback($pattern, function($match) use ($data)
            {
                $match = explode('||',$match[1]);
                return isset($data[$match[0]]) ? $data[$match[0]] : $data[$match[1]] ;
            }, $url);
            $response->redirect($tunedUrl);
        }else{
            $controller = $route->getController($request, $response);
            $action = $route->getAction();
            $params = [];
            call_user_func_array([$controller, 'before'], $params);
            call_user_func_array([$controller, $action], $params);
            call_user_func_array([$controller, 'after'], $params);
            //$controller->execute($request, $response);
            $response->send();
        }
    }
}