<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 14:38
 */
class Human
{
    private $name;
    private $dateOfBirth;
    private $height;
    private $weight;

    public function __construct(string $name, double $dateOfBirth)
    {
        $this->name        = $name;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setWeight(double $weight)
    {
        $this->weight = $weight;
    }

    public function getWeight(): double
    {
        return $this->weight;
    }

    public function setHeight(double $height)
    {
        $this->height = $height;
    }

    public function getHeight(): double
    {
        return $this->height;
    }
}