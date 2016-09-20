<?php
/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 10:48
 */

require_once('Shape.php');
require_once('Circle.php');
require_once('ShapeFactory.php');

$colours = array('red', 'blue', 'green', 'black', 'white', 'orange');

$factory = new ShapeFactory();

for ($i = 0; $i < 100; $i++) {
    $randomColour = $colours[array_rand($colours)];

    $circle = $factory->getCircle($randomColour);
    $circle->setX(rand(0, 100));
    $circle->setY(rand(0, 100));
    $circle->setRadius(100);

    $circle->draw();
}