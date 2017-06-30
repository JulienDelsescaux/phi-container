<?php
namespace Phi\Container;


use Phi\Traits\Collection;

class Container
{


    use Collection;

    /**
     * @param $name
     * @param $callback
     * @param bool $isStatic
     * @return Bag
     */
    public function set($name, $callback, $isStatic = true)
    {
        $bag = new Bag($callback, $isStatic);
        $this->setVariable($name, $bag);
        return $bag;
    }


    public function get($name)
    {
        $bag = $this->getVariable($name);
        if ($bag) {
            return $bag->getValue();
        } else {
            return null;
        }
    }


}