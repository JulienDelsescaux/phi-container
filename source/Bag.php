<?php
namespace Phi\Container;

class Bag
{


    protected $value = null;
    protected $isStatic = true;
    protected $callback;


    public function __construct($callback, $isStatic = true)
    {
        $this->callback = $callback;
        $this->isStatic = $isStatic;
    }

    public function getValue($parameters = array())
    {

        if ($this->value !== null && $this->isStatic) {
            return $this->value;
        } else {
            if (is_callable($this->callback)) {
                $this->value = call_user_func_array($this->callback, $parameters);
            } else {
                $this->value = $this->callback;
            }
            return $this->value;
        }
    }


}