<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 12:59
 */
class Salary
{
    private $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function calculate(float $sales): float
    {
        $base       = $this->employee->getBaseSalary();
        $commission = $this->employee->getCommission() * $sales;
        $deducation = $base * $this->employee->getPension();

        return $commission + $base - $deducation;
    }
}