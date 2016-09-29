<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 16:31
 */

require_once('Power.php');
require_once('Square.php');
require_once('Cube.php');
require_once('RaiseNumber.php');

if (isset($_GET['n'])) {
    $number = $_GET['n'];
} else {
    $number = 0;
}

if ($number < 5) {
    $power = new Cube();
} else {
    $power = new Square();
}

$processor = new RaiseNumber($power);

var_dump($processor->raise($number));