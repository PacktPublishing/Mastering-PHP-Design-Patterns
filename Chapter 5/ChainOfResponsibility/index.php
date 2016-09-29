<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 14:12
 */

require_once('Purchaser.php');
require_once('AssociatePurchaser.php');
require_once('ManagerPurchaser.php');
require_once('DirectorPurchaser.php');
require_once('BoardPurchaser.php');

$associate = new AssociatePurchaser();
$manager = new ManagerPurchaser();
$director = new DirectorPurchaser();
$board = new BoardPurchaser();

$associate->setNextPurchaser($manager);
$manager->setNextPurchaser($director);
$director->setNextPurchaser($board);

$associate->buy(11000);