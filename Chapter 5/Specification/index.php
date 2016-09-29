<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 17:35
 */

require_once('EmployeeSpecification.php');
require_once('EmployeeIsEngineer.php');

$workers = array();

$workers['A'] = new StdClass();
$workers['A']->title = "Developer";
$workers['A']->department = "Engineering";
$workers['A']->salary = 50000;

$workers['B'] = new StdClass();
$workers['B']->title = "Data Analyst";
$workers['B']->department = "Engineering";
$workers['B']->salary = 30000;

$workers['C'] = new StdClass();
$workers['C']->title = "Personal Assistant";
$workers['C']->department = "CEO";
$workers['C']->salary = 25000;

$isEngineer = new EmployeeIsEngineer();

foreach ($workers as $id => $worker) {
    if ($isEngineer->isSatisfiedBy($worker)) {
        var_dump($id);
    }
}