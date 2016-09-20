<?php
/**
 * User: Junade Ali
 * Date: 14/03/2016
 * Time: 08:07
 */

require_once('AnimalFeeder.php');
require_once('AnimalFeederProxy.php');


require_once('AnimalFeeders/Cat.php');
$felix = new \IcyApril\PetShop\AnimalFeederProxy('Cat', 'Felix');
echo $felix->displayFood(1);
echo "\n";
echo $felix->dropFood(1, true);
echo "\n";

require_once('AnimalFeeders/Dog.php');
$brian = new \IcyApril\PetShop\AnimalFeederProxy('Dog', 'Brian');
echo $brian->displayFood(1);
echo "\n";
echo $brian->dropFood(1, true);