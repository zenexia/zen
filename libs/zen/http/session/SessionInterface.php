<?php
/**
 * Created by PhpStorm.
 * User: uu103087
 * Date: 2018/02/08
 * Time: 20:45
 */

namespace zen\session;


interface SessionInterface
{
    public function get(string $key): string ;

    public function has(string $key):bool ;

    public function set(string $key, string $value):bool ;

    public function unset(string $key):bool ;
}