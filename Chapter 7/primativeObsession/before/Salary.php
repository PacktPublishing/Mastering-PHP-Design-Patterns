<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 12:59
 */
class Salary
{
    private $baseSalary;
    private $commission = 0;
    private $pension = 0;

    public function __construct(float $baseSalary, float $commission, float $pension)
    {
        $this->baseSalary = $baseSalary;
        $this->commission = $commission;
        $this->pension    = $pension;
    }

    public function calculate(float $sales): float
    {
        $base       = $this->baseSalary;
        $commission = $this->commission * $sales;
        $deducation = $base * $this->pension;

        return $commission + $base - $deducation;
    }
}