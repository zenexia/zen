<?php

/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-29
 * Time: 20:10
 */
namespace zen\http;

Interface ResponseInterface {

    public function __construct(string $viewsPath);

    public function addHeader($header);

    public function addHeaders(array $headers);
    public function addContent(string $content);
    public function getHeaders();
    public function send();

    public function redirect(string $url);

    public function setView(string $template);

}