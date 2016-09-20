<?php

/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 02:23
 */
class Burger
{
    private $cheese;
    private $chips;
    private $price;

    public function __construct(bool $cheese, bool $chips)
    {
        $this->cheese = $cheese;
        $this->chips = $chips;

        $this->price = rand(1, 2.50) + ($cheese ? 0.5 : 0) + ($chips ? 1 : 0);
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}