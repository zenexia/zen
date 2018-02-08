<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-31
 * Time: 18:14
 */

namespace zen\mvc\controllers;


class ControllerNotFoundException extends \Exception
{
    public function __construct($message, $code, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}