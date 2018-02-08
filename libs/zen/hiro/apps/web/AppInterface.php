<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-30
 * Time: 11:53
 */
declare(strict_types=1);

namespace zen\hiro\apps;


interface AppInterface
{
    public function run(string $viewsPath);
}