<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 16:03
 */
class Cube implements Power
{
    public function raise(int $number): int
    {
        return pow($number, 3);
    }
}