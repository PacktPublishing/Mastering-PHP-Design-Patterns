<?php
/**
 * User: Junade Ali
 * Date: 23/05/2016
 * Time: 13:10
 */

require_once('Feed.php');
require_once('Reader.php');

$newspaper = new Feed('Junade.com');

$allen = new Reader('Mark');
$jim = new Reader('Lily');
$linda = new Reader('Caitlin');

//add reader
$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

//remove reader
$newspaper->detach($linda);

//set break outs
$newspaper->breakOutNews('PHP Design Patterns');