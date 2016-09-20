<?php

/**
 * User: Junade Ali
 * Date: 14/03/2016
 * Time: 08:11
 */

namespace IcyApril\PetShop;

class AnimalFeederProxy
{
    protected $instance;

    public function __construct(string $feeder, string $name)
    {
        $class = __NAMESPACE__ . '\\AnimalFeeders\\' . $feeder;
        $this->instance = new $class($name);
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->instance, $name], $arguments);
    }
}