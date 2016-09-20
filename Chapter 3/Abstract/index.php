<?php
/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 20:05
 */

require_once('ToyFactory.php');
require_once('Toys/Toy.php');
require_once('Toys/MazeToy.php');
require_once('Toys/PuzzleToy.php');

require_once('SFToyFactory.php');
require_once('Toys/SFMazeToy.php');
require_once('Toys/SFPuzzleToy.php');

$sanFraciscoFactory = new SFToyFactory();
var_dump($sanFraciscoFactory->makeMaze());
echo "\n";
var_dump($sanFraciscoFactory->makePuzzle());
echo "\n";

require_once('UKToyFactory.php');
require_once('Toys/UKMazeToy.php');
require_once('Toys/UKPuzzleToy.php');

$britishToyFactory = new UKToyFactory();
var_dump($britishToyFactory->makeMaze());
echo "\n";
var_dump($britishToyFactory->makePuzzle());
echo "\n";