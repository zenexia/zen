<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-30
 * Time: 11:53
 */
declare(strict_types=1);

namespace zen\hiro\apps;


abstract class Application implements ApplicationInterface
{
    protected $appRoot;

    public function __construct(string $appRoot = '')
    {
        if(empty($appRoot)){
            $appRoot = dirname(dirname(__FILE__));
        }
        $this->appRoot = $appRoot;
    }
}