<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 16:02
 */
class Square implements Power
{
    public function raise(int $number): int
    {
        return pow($number, 2);
    }
}