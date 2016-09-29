<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 20/06/2016
 * Time: 22:45
 */
class VeganPasta extends Pasta
{

    public function addSauce(): bool
    {
        var_dump("Added tomato sauce");

        return true;
    }

    public function addMeat(): bool
    {
        return false;
    }

    public function addCheese(): bool
    {
        return false;
    }

}