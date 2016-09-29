<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 17:45
 */
interface EmployeeSpecification
{
    public function isSatisfiedBy(StdClass $customer): bool;
}