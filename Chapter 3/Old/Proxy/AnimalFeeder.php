<?php

/**
 * User: Junade Ali
 * Date: 14/03/2016
 * Time: 08:08
 */

namespace IcyApril\PetShop;

interface AnimalFeeder
{
    public function __construct(string $petName);

    public function dropFood(int $hungerLevel, bool $water = false): string;

    public function displayFood(int $hungerLevel): string;
}