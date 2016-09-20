<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 18/02/2016
 * Time: 07:41
 */

$isAdmin = false;
extract($_GET);

if ($isAdmin === true) {
    echo "Hey ".$name."; here, have some secret information!";
}