<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 16:29
 */
class RaiseNumber
{
    public function __construct(Power $strategy)
    {
        $this->strategy = $strategy;
    }

    public function raise(int $number)
    {
        return $this->strategy->raise($number);
    }
}