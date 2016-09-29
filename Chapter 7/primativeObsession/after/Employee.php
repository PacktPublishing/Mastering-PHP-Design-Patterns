<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 12:52
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

    public function getBaseSalary(): float
    {
        return $this->baseSalary;
    }

    public function setCommission(float $percentage)
    {
        $this->commission = $percentage;
    }

    public function getCommission(): float
    {
        return $this->commission;
    }

    public function setPension(float $rate)
    {
        $this->pension = $rate;
    }

    public function getPension(): float
    {
        return $this->commission;
    }
}