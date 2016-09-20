<?php
/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 02:36
 */

require_once('Burger.php');
require_once('BurgerLazyLoader.php');

$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burger with cheese and fries costs: £".$burger->getPrice();

echo "\n";
echo "Instances in lazy loader: ".BurgerLazyLoader::getBurgerCount();
echo "\n";

$burger = BurgerLazyLoader::getBurger(true, false);
echo "Burger with cheese and no fries costs: £".$burger->getPrice();

echo "\n";
echo "Instances in lazy loader: ".BurgerLazyLoader::getBurgerCount();
echo "\n";

$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burger with cheese and fries costs: £".$burger->getPrice();

echo "\n";
echo "Instances in lazy loader: ".BurgerLazyLoader::getBurgerCount();
echo "\n";