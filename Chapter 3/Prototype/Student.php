<?php

/**
 * User: Junade Ali
 * Date: 16/05/2016
 * Time: 22:03
 */

class Student
{
    public $name;
    public $year;
    public $grade;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function setGrade(string $grade)
    {
        $this->grade = $grade;
    }

}