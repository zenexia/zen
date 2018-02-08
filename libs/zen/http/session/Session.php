<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-25
 * Time: 14:18
 */

namespace zen\session;


class Session implements SessionInterface
{
    public function __construct()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function get(string $key): string {
        if(!$this->has($key)){
            throw new \Exception("Doesn't exist", 12);
        }else{
            return $_SESSION[$key];
        }
    }

    public function has(string $key): bool {
        return isset($_SESSION[$key]);
    }

    public function set(string $key, string $value): bool {
        return $_SESSION[$key] = $value;
    }

    public function unset(string $key):bool
    {
        return session_destroy();
    }

}