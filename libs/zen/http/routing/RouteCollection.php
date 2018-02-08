<?php
/**
 * Created by ahmad.
 * Project: zmc
 * Date: 2017-05-30
 * Time: 14:51
 */

namespace zen\routing;

class RouteCollection implements RouteCollectionInterface, \Countable, \Iterator
{
    protected $routes;
    protected $cursor;
    protected $currentRoute;

    public function __construct()
    {
        $this->cursor = -1;
        $this->currentRoute = null;

    }

    public function add(RouteInterface $route) {
        $this->routes[] = $route;
    }

    public function getIterator() {
        return new \ArrayIterator( $this->routes );
    }

    public function count() {
        return sizeof($this->routes);
    }

    public function rewind() {
        if ($this->cursor >= 0){
            $this->cursor = -1;
            $this->currentRoute = null;
        }
    }

    public function next() {
        $this->cursor++;
        $this->currentRoute = $this->routes[$this->cursor];
    }

    public function current():RouteInterface {
        return $this->currentRoute;
    }

    public function key() {
        return $this->cursor;
    }

    public function valid() {
        return ($this->cursor < $this->count());
    }
}