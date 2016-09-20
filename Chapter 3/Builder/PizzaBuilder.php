<?php

/**
 * User: Junade Ali
 * Date: 16/05/2016
 * Time: 19:47
 */
class PizzaBuilder
{
    public $size;
    public $cheese;
    public $pepperoni;
    public $bacon;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function cheese(bool $present): PizzaBuilder
    {
        $this->cheese = $present;
        return $this;
    }

    public function pepperoni(bool $present): PizzaBuilder
    {
        $this->pepperoni = $present;
        return $this;
    }

    public function bacon(bool $present): PizzaBuilder
    {
        $this->bacon = $present;
        return $this;
    }

    public function build()
    {
        return $this;
    }
}