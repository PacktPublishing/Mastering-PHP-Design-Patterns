<?php
/**
 * User: Junade Ali
 * Date: 18/01/2016
 * Time: 22:20
 */

require_once('vendor/autoload.php');

new \IcyApril\ChapterOne\Book();

$pets = array(
    'felix' => new \IcyApril\ChapterOne\Cat(),
    'oscar' => new \IcyApril\ChapterOne\Dog(),
    'snowflake' => new \IcyApril\ChapterOne\Cat()
);

foreach ($pets as $pet) {
    echo $pet->talk(false);
    $pet->walk(1);
}