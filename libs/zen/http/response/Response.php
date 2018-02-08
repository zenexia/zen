<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:10
 */
namespace zen\http;

use Hiro\Views\ViewFileNotFoundException;

class Response implements ResponseInterface
{
    protected $viewsPath;
    protected $content;
    protected $headers;
    protected $template;
    protected $viewParams;

    const FILE_TYPE = ".html.php";

    public function __construct(string $viewsPath) {
        $this->viewsPath = $viewsPath;
    }


    public function addHeader($header) {
        $this->headers[] = $header;
        return $this;
    }

    public function addHeaders(array $headers) {
        foreach ($headers as $header) {
            $this->addHeader($header);
        }
        return $this;
    }

    public function getHeaders() {
        return $this->headers;
    }

    public function send() {
        if (!empty($this->headers) && !headers_sent()) {
            foreach($this->headers as $header) {
                header("$header", true);
            }
        }
        if(!empty($this->template)){
            $this->render();
        }else{

        }
    }

    public function render(){
        extract($this->viewParams);
        $viewFile = $this->viewsPath . $this->template . self::FILE_TYPE;
        if(!file_exists($viewFile)){
            throw new ViewFileNotFoundException("The view file $viewFile does not exist", 3456);
        }
        include $this->viewsPath . $this->template . self::FILE_TYPE;
    }

    public function with(array $params){
        $this->viewParams = $params;
    }

    public function redirect(string $url){
        header("Location: $url");
        die();
    }

    public function addContent(string $content){
        $this->content = $content;
    }

    public function setView(string $template){
        $this->template = $template;
        return $this;
    }
}