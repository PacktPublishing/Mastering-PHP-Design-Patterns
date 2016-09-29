<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 20/06/2016
 * Time: 22:47
 */

require_once('Pasta.php');
require_once('MeatballPasta.php');

var_dump("Meatball pasta");
$dish = new MeatballPasta(true);
$dish->cook();

var_dump("");
var_dump("Vegan pasta");
require_once('VeganPasta.php');

$dish = new VeganPasta(true);
$dish->cook();