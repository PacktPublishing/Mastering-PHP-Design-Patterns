<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 17:49
 */
class EmployeeIsEngineer implements EmployeeSpecification
{
    public function isSatisfiedBy(StdClass $customer): bool
    {
        if ($customer->department === "Engineering") {
            return true;
        }
        
        return false;
    }
}