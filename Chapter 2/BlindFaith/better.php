<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 18/02/2016
 * Time: 07:43
 */

$isAdmin = false;

if ($isAdmin === true) {
    echo "Hey ".htmlspecialchars($_GET['name'])."; here, have some secret information!";
}