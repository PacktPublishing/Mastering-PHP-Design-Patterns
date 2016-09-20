<?php
/**
 * User: Junade Ali
 * Date: 14/03/2016
 * Time: 08:16
 */

namespace IcyApril\PetShop\AnimalFeeders;


use IcyApril\PetShop\AnimalFeeder;

class Cat implements AnimalFeeder
{
    public function __construct(string $petName)
    {
        $this->petName = $petName;
    }

    public function dropFood(int $hungerLevel, bool $water = false): string
    {
        return $this->selectFood($hungerLevel) . ($water ? ' with water' : '');
    }

    public function displayFood(int $hungerLevel): string
    {
        return $this->selectFood($hungerLevel);
    }

    protected function selectFood(int $hungerLevel): string
    {
        switch ($hungerLevel) {
            case 0:
                return 'lamb';
                break;
            case 1:
                return 'chicken';
                break;
            case 3:
                return 'tuna';
                break;
        }
    }
}