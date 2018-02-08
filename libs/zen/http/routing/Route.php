<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:11
 */
namespace zen\routing;
use Hiro\Controllers\ControllerInterface;
use zen\http\RequestInterface;

abstract class Route implements RouteInterface
{

    protected $path;
    protected $name;
    protected $methods;
    protected $paramDefaults;
    protected $conditions;

    public function __construct(
        string $path,
        string $name = '',
        array $methods = [],
        array $paramDefaults = [],
        array $conditions = []
    ) {
        $this->path = $path;
        $this->name = $name;
        $this->methods = $methods;
        $this->paramDefaults = $paramDefaults;
        $this->conditions = $conditions;
    }

    public function match(RequestInterface $request) {

        $matches = $this->getPathRegex();
        if(!empty($matches[1])){
            return $this->fullMatch($request, $matches);
        }else{
            return $this->simpleMatch($request);
        }
    }

    private function simpleMatch(RequestInterface $request){
        $uri = $request->getURI();
        $match = false;
        $rMethod = $request->getMethod();
        if(empty($this->methods)){
            $match = $this->path === $uri;
        }elseif(in_array($rMethod, $this->methods)){
            $match = $this->path === $uri;
        }
        return $match;
    }

    private function fullMatch(RequestInterface $request, $matches){

        $uri = $request->getURI();
        //remove trailing slash
        $uri = rtrim($uri, '/');
        $matching = false;

        $pathParts = explode('/', $this->path);
        $urlParts =  explode('/', $uri);

        $j=0;
        if(sizeof($pathParts) == sizeof($urlParts)){
            // size is same
            for($i=0;$i<sizeof($pathParts);$i++){
                if($pathParts[$i] == $matches[0][$j]){
                    $j++;
                    if($j == sizeof($matches[0])){
                        $j--;
                    }
                    $matching = true;
                }elseif($pathParts[$i] == $urlParts[$i]){
                    $matching = true;
                }else{
                    $matching = false;
                    break;
                }
            }
        }

        // if it is matched, this seems to be a good place to add variables into request
        if($matching){
            $this->setParams($request, $matches, $pathParts, $urlParts);
        }
        return $matching;
    }

    private function getPathRegex(){
        preg_match_all('/{(.*?)}/', $this->path, $matches);
        return $matches;
    }

    private function setParams(RequestInterface $request, $matches, $pathParts, $urlParts){
        $j=0;
        $params = [];
        for($i=0;$i<sizeof($pathParts);$i++){
            if($pathParts[$i] == $matches[0][$j]){
                //This is a variable
                $param = [];
                $param['name'] = $matches[1][$j];
                $param['value'] = $urlParts[$i];
                $params[] = $param;
                $j++;
                if($j == sizeof($matches[0])){
                    $j--;
                }
            }
        }

        foreach ($params as $param){
            $request->setParam($param['name'], $param['value']);
        }
    }

}