<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 20/06/2016
 * Time: 22:23
 */
abstract class Pasta
{
    public function __construct(bool $cheese = true)
    {
        $this->cheese = $cheese;
    }

    public function cook()
    {

        var_dump('Cooked pasta.');

        $this->boilPasta();
        $this->addSauce();
        $this->addMeat();

        if ($this->cheese) {
            $this->addCheese();
        }
    }

    public function boilPasta(): bool
    {
        return true;
    }


    public abstract function addSauce(): bool;

    public abstract function addMeat(): bool;

    public abstract function addCheese(): bool;

}