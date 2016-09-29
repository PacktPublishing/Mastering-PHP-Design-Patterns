<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 15:44
 */
class After
{
    function deductTax(float $salary, float $rate): float
    {
        $netSalary = $salary * $rate;

        return $netSalary;
    }
}