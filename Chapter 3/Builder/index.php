<?php
/**
 * User: Junade Ali
 * Date: 16/05/2016
 * Time: 19:56
 */

require_once('Pizza.php');
require_once('PizzaBuilder.php');

$pizzaRecipe = (new PizzaBuilder(9))
    ->cheese(true)
    ->pepperoni(true)
    ->bacon(true)
    ->build();


$order = new Pizza($pizzaRecipe);
echo $order->show();