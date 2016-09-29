<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 15:28
 */
class Employee
{
    private $name;
    private $baseSalary;
    private $commission = 0;
    private $pension = 0;

    public function __construct(string $name, float $baseSalary)
    {
        $this->name       = $name;
        $this->baseSalary = $baseSalary;
    }

    public function setCommission(float $percentage)
    {
        $this->commission = $percentage;
    }

    public function setPension(float $rate)
    {
        $this->pension = $rate;
    }

    public function calculate(float $sales): float
    {
        $base       = $this->baseSalary;
        $commission = $this->commission * $sales;
        $deducation = $base * $this->pension;

        return $commission + $base - $deducation;
    }
}