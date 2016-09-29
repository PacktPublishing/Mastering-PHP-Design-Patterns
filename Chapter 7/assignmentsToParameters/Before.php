<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 15:43
 */
class Before
{
    function deductTax(float $salary, float $rate): float
    {
        $salary = $salary * $rate;

        return $salary;
    }
}