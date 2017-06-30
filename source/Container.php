<?php
namespace Phi\Container;


use Phi\Traits\Collection;

class Container
{


    use Collection;

    public function set($name, $callback)
    {
        $this->setVariable($name, $callback);
    }


    public function get($name) {

    }


}